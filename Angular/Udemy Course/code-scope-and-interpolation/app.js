var myApp = angular.module('myApp', []);

if(typeof angular == 'undefined') {
       alert("NOT GOOD");
     }

myApp.controller('mainController', ['$scope', '$timeout', 
	function($scope, $timeout) {
		
	    $scope.name = "Hans";

	    $timeout(function(){

	    	$scope.name = "Everybody";

	    }, 3000);
    
}]);
