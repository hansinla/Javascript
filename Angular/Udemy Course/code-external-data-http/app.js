var myApp = angular.module('myApp', []);

myApp.controller('mainController', ['$scope', '$filter','$http', function ($scope, $filter, $http) {

    $scope.handle = '';

    $scope.lowercasehandle = function () {
        return $filter('lowercase')($scope.handle);
    };

    $scope.characters = 5;
    $scope.newRule = "";

    $http.get('/api').success(function(result){
       $scope.rules = result;
    }).error(function(data,status){
        console.log(data);
    });

    $scope.addRule = function(){
        $http.post('/api', {newRule: $scope.newRule}).success(function(result){
            $scope.rules = result;
        }).error(function(data,status){
            console.log(data);
        });

    };

}]);