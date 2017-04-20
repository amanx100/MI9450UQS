
(function (ang, ae, addr) {
    ang
        .module('miUniqueCode', [
            'ngAnimate',
            'ngAria',
            'ngMessages',
            'ngMaterial',
            'ngRoute'
        ])

        .factory('loginId', function ($q, $http, $location) {
            return {
                rs: function () {
                    var deferred = $q.defer();

                    $http
                        .post(addr + 'preface.sw?app=session', {})
                        .then(function (r) {
                            if (r.data.permission){
                                deferred.resolve(r.data.sd);
                            } else {
                                $location.url('login');
                            }
                        }, function () {
                            deferred.notify('connection error');
                            alert('fail');
                        });

                    return deferred.promise;
                }
            };
        })

        .config(['$routeProvider', '$locationProvider', function ($routeProvider, $locationProvider) {
            $routeProvider
                .when('/login', {
                    templateUrl: 'preface.sw?app=login',
                    controller: 'loginController'
                })

                .when('/', {
                    templateUrl: 'preface.sw?app=uqg',
                    controller: 'uqg',
                    resolve: {
                        userData: function (loginId) {
                            return loginId.rs();
                        }
                    }
                })

                .otherwise({
                    redirectTo: '/'
                });

            $locationProvider.html5Mode(true);
        }])

        .controller('mainController', ['$scope', '$http', function ($scope) {

        }])

        .controller('loginController', function ($scope, $routeParams, $http, $location) {
            $scope.prgs = true;
            $scope.login = function () {
                //location.replace("adfdsf");
                $scope.prgs = false;
                $scope.message = '';
                $http
                    .post(addr + 'preface.sw?app=session', {'userid':$scope.userid, 'userpassword':$scope.userpassword})
                    .then(function (r) {
                        //console.log(r.data);
                        if (r.data.permission) {
                            $scope.messageColor = 'green';
                            $scope.message = 'Login Success! Please Wait...';
                            $location.url('/');
                        } else {
                            $scope.prgs = true;
                            $scope.messageColor = 'red';
                            $scope.message = 'Login Invalid!';
                        }

                    }, function () {
                        alert('fail');
                    });
            };
        })

        .controller('uqg', function ($scope, $routeParams, $http, userData) {
            $scope.userFullName = userData.fullName;
            
        })

})(angular, angular.element, 'http://localhost/MI9450UQS/');