var App = App || angular.module('cashApp', []);

var App = App || angular.module('cashApp', []);

App.controller('GlobalController', function ($scope, $http){

});

App.controller('MainController', function($scope, $http) {

    $scope.signIn = function() {

        var username = angular.element(".username input").val(),
            password = angular.element(".password input").val();

        if (username == '' || password == '') {
            alert('Please enter both username & password to sign in.');
            return;
        }

     
        $http.post('/api/sign-in', {
            username: username,
            password: password

        }).success(function(data, status, headers, config) {
            if (data.status == 'success') {
                location = "/buff";
            } else {
                alert('Wrong username/password');
                console.log(data.message);
            }
        });
    }
});