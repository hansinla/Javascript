angular.module('app', []);

angular.module('app').config(['$controllerProvider', function($controllerProvider) {
	$controllerProvider.allowGlobals();	
}]);

function MessageController($scope){
	$scope.message = "This is a model.";
}

function CountController($scope){
	$scope.count = function() { return 12;};
}

function AdditionController($scope){
	$scope.operand1 = 0;
	$scope.operand2 = 0;
	$scope.add = function(){
		return $scope.operand1 + $scope.operand2;
	};
	$scope.options = [0, 1, 2, 3, 4];
}

function AdditionParamsController($scope){
	$scope.number = 2;
	$scope.add = function(operand1, operand2){
		return operand1 + operand2;
	};
	$scope.options = [0, 1, 2, 3, 4];
}

function AuthController($scope) {
  $scope.authorized = true;
  $scope.toggle = function() {
    $scope.authorized = !$scope.authorized;
  };
}


