/**
 * Created by shubh on 11/9/15.
 */


var mainApp = angular.module("mainApp", ['ngRoute']);
mainApp.config(['$routeProvider', function($routeProvider) {
    $routeProvider.

        when('/main', {
            templateUrl: 'views/main.html'

        }).

        when('/subject', {
            templateUrl: 'views/subject.htm',
            controller: 'studentController'
        }).

        otherwise({
            redirectTo: '/main'
        });
}]);
