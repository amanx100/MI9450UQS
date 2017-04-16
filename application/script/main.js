
(function (ang, ae, addr) {
    ang
        .module('miUniqueCode', [
            'ngAnimate',
            'ngAria',
            'ngMessages',
            'ngMaterial',
            'ngRoute'
        ])

        .config(function ($routeProvider, $locationProvider) {
            $routeProvider
                .when('/Login', {
                    templateUrl: 'preface.sw?app=login',
                    controller: 'loginController'
                })

                .when('/uniquecode/23', {
                    templateUrl: 'preface.sw?app=uqg',
                    controller: 'uqg'
                })

                .otherwise({
                    redirectTo: '/uniquecode/23'
                });

            $locationProvider.html5Mode(true);
        })

        .controller('mainController', ['$scope', '$http', function ($scope) {

        }])

        .controller('loginController', function ($scope, $routeParams, $http) {
            $scope.login = function () {
                //location.replace("adfdsf");
                $http.post(addr + 'preface.sw?app=session', {'userid':'222', 'userpassword':'1234'}).then(function (r) {
                    console.log(r.data);
                }, function () {
                    alert('fail');
                });
            };
        })

        .controller('uqg', function ($scope, $routeParams) {
            
        })

})(angular, angular.element, 'http://localhost/MI9450UQS/');