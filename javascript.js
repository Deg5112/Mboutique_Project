$(function(){
    //language handler
    $('.language').click(function(){
        var lang = $(this).attr('data-lang');
        console.log(lang);

        $('.goog-te-menu-frame').contents().find('.goog-te-menu2-item span.text:contains('+lang+')').click();
        return false;
    });

    //jumbo slider
    var srcArray = ['welcome-image.png', 'our-macarons-image.png', 'gifts-parties-image.png'];
    var i = 1;
    var x;
    var src;
    setInterval(function(){
        if(i===3){
            i=0;
        }
        x = srcArray[i];
        $('.jumbotron').fadeOut('slow', function(){
            $('.jumbotron').fadeIn();
            src = 'url(assets/images/' +  x  + ')';
            $('.jumbotron').css('background-image', src);
            $('.jumbotron').fadeIn('slow');
        });
        i+=1;
    }, 5000);

    var app = angular.module('myApp', ['ng-route']);
    app.config(function($routeProvider){
        $routeProvider
            .when('/', {
                templateUrl: 'htmlforIndex.html',
                controller: 'mainController'
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
    //TODO shouldn't this work??
    //app.controller('mainController', function(){
    //    backgroundUrl = 'assets/images/welcome-image.png'
    //});


});







