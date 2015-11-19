var app = angular.module('addressApp', ['ngRoute']);

app.config(['$routeProvider', '$locationProvider', function($routeprovider, $locationProvider) {
    $routeprovider.when('/', {
        templateUrl : 'list-address-view.php',
        controller  : 'AddressController'
    }).when('/add', {
        templateUrl : 'add-address.php',
        controller  : 'FormController'  
    });
    
      $locationProvider.html5Mode({
             enabled: true,
             requireBase: false
      });
    
}]);

app.controller('AddressController', function($scope, $http) {
    $http.get('list-address.php')
        .success(function(response) {
        $scope.addressRecords = response;
    });
});

app.controller('FormController', function() {
    
});
