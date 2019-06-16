var myApp = angular.module('myApp', []);

myApp.controller('mainController', ['$scope', '$filter', function($scope, $filter) {
	
    $scope.twitter = "";

    $scope.lowercasetwitter = function(){
    	return $filter('lowercase')($scope.twitter);
    };
    
}]);
