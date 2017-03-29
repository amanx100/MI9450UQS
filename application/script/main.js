
(function (ang, ae) {
    ang
        .module('miUniqueCode', [
            'ngAnimate',
            'ngAria',
            'ngMessages',
            'ngMaterial',
            'ngRoute'
        ])
        .controller('mainController', ['$scope', '$http', function ($scope) {

        }])
        .controller('loginController', function ($scope, $routeParams) {
            $scope.login = function () {
                location.replace("uniquecode");
            };
        })
        .controller('uniquecode', function ($scope, $routeParams) {
            
        })
        .config(function ($routeProvider, $locationProvider) {
            $routeProvider
                .when('/Login', {
                    templateUrl: 'preface.sw?app=login',
                    controller: 'loginController'
                })
                .when('/uniquecode', {
                    templateUrl: 'preface.sw?app=main',
                    controller: 'uniquecode'
                });
            $locationProvider.html5Mode(true);
        })

})(angular, angular.element);