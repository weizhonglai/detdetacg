var App = App || angular.module('detdetApp', []);

App.controller('MainController', function($scope, $http) {

    $scope.signUp = function() {
        
        var name = angular.element(".name").val(),
            email = angular.element(".email").val(),
            nric = angular.element(".nric").val(),
            dob = angular.element(".dob").val(),
            gender = angular.element(".gender").val(),
            sta1 = angular.element(".address1").val(),
            sta2 = angular.element(".address2").val(),
            postcode = angular.element(".postcode").val(),
            city   = angular.element(".city").val(),
            state = angular.element(".state").val(),
            country = angular.element(".country").val(),
            tel = angular.element(".tel").val(),
            faxnumber = angular.element(".faxnumber").val(),
            password = angular.element(".password").val(),
            cpassword = angular.element(".cpassword").val();

        if (name == '' || email=''|| nric='' || dob=''|| gender=''|| tel='' || password='' || cpassword='') {
            alert('You have to fill up all fields to complete the sign up');
            return;
        }    

/*        if (!/^(([A-Za-z0-9]+_+)|([A-Za-z0-9]+\-+)|([A-Za-z0-9]+\.+)|([A-Za-z0-9]+\++))*[A-Za-z0-9]+@((\w+\-+)|(\w+\.))*\w{1,63}\.[a-zA-Z]{2,6}$/.test(email)) {
            alert('Invalid email address.');
            return;
        }*/

        if(!/^\w{6,30}$/.test(username)){
            alert('Username have to be at least 6 alphanumeric(only) characters.');
            return;
        }

        if(password1.length < 6){
            alert('Password have to be at least 6 characters.');    
            return;
        }        

        if(password1 != password2){
            alert('Both passwords are not match.');
            return;
        }

        $http.post('/api/sign-up', {
          name = name,
            email = email,
            nric = nric,
            dob = dob,            
         gender = gender,
            sta1 = address1,
            sta2 = address2,
            postcode = post_code,
            city   = city,
            state = state,
            country = country,
            tel =  mobile,           
            faxnumber = fax_number,
            password = password
        }).success(function(data, status, headers, config) {
            if (data.status == 'success') {
                alert('Your account has successfullly created. Welcome!');
                location = "/";
            } else {
                alert(data.message);
                console.log(data.message);
            }
        });
    }

});
