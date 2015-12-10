var app = angular.module('myApp', ['ngRoute']);
app.config(function($routeProvider){
    $routeProvider
        .when('/', {
            templateUrl: 'home.html',
            controller: function(){
                this.background = 'assets/images/welcome-image.png';
            },
            controllerAs: 'mC'

        })
        .when('/macarons',{
            templateUrl: 'macarons.html',
            controller: 'macaronsController'
        })
        .when('/gifts', {
            templateUrl: 'gifts.html',
            controller: 'giftsController'
        })
        .when('/contact',{
            templateUrl: 'contact.html',
            controller: 'contactController'
        });
});
////TODO shouldn't this work??

app.controller('macaronsController', function($scope){
    $scope.background = 'assets/images/our-macarons-image.png';
});

app.controller('giftsController', function($scope){
    $scope.background = 'assets/images/gifts-parties-image.png';
});
app.controller('contactController', function($scope){
    $scope.background = 'assets/images/contact-image.png';
});