var App = App || angular.module('detdetApp', []);

App.controller('SignInController', function($scope, $http) {

    $scope.signIn = function() {
        var username = angular.element("#username").val(),
            password = angular.element("#password").val();

        if (username == '' || password == '') {
            alert('Please enter both username & password to sign in.');
            return;
        }

       
        $http.post('/api/admin/sign-in', {
            username: username,
            password: password

        }).success(function(data, status, headers, config) {
            if (data.status == 'success') {
                location = "/admin/member-list";
            } else {
                alert('Wrong username/password');
                console.log(data.message);
            }
        });
    }
});