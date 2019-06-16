var myApp = angular.module('myApp', []);

myApp.controller('mainController', ['$scope', '$filter', '$timeout', function($scope, $filter, $timeout){

	$scope.handle = '';

	$scope.lowercasehandle = function(){

		return $filter('lowercase')($scope.handle);
	};

	$scope.$watch('handle', function(newValue, oldValue){
		console.warn("Changed!");
		console.log("Old value:", oldValue, "New Value:", newValue);
	});

	// setTimeout(function(){
	// 	$scope.$apply(function(){
	// 		$scope.handle = 'newtwitterhandle';
	// 		console.log('handle changed');
	// 	});
	// }, 3000);

	$timeout(function(){
		
			$scope.handle = 'newtwitterhandle';
			console.log('handle changed');
	
	}, 3000);


}]);