var App = App || angular.module('detdetApp', []);

App.controller('GlobalController', function ($scope, $http){


});

App.controller('MainController', function ($scope, $http){


});

function showShoppingCart() {
    $('.shopping-cart.form').removeClass('hide');
    $('.shopping-cart.form').addClass('active');
}

function hideShoppingCart() {
    $('.shopping-cart.form').removeClass('active');
    $('.shopping-cart.form').addClass('hide');
}