var myApp = angular.module('myApp', ['ngMessages', 'ngResource']);

myApp.controller('mainController', function($scope, $log, $filter) {

	// console.log($log);
	$log.log("Hello");

	$scope.name = "John";
	$scope.formattedName = $filter('uppercase')($scope.name);
	$log.info($scope.formattedName);    
});

