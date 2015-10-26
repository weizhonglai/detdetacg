var App = App || angular.module('detdetApp', []);

App.controller('MainController', function($scope, $http){

    $scope.signUp = function() {
        
        var first_name = angular.element("input.first_name").val(),
            last_name = angular.element("input.last_name").val(),  
            domain = angular.element("input.mail_domain").val(),   
            mail = angular.element("select.mail_sys").val(),   
            email = domain + '@' + mail, 
            nric = angular.element("input.nric").val(),
            dob = angular.element("input.dob").val(),
            gender = angular.element(".option_gender input:checked").val(),
            address1 = angular.element("input.address1").val(),
            address2 = angular.element("input.address2").val(),
            post_code = angular.element("input.post_code").val(),
            city   = angular.element("input.city").val(),
            state = angular.element("select.state").val(),
            mobile = angular.element("input.mobile").val(),
            home_number = angular.element("input.home_number").val(),
            office_number = angular.element("input.office_number").val(),
            fax_number = angular.element("input.fax_number").val(),
            first_password = angular.element("input.first_password").val(),
            confirm_password = angular.element("input.confirm_password").val();

        if (first_name == '' || last_name == '' || mail == ''|| nric == '' || dob == ''|| mobile == '' || first_password == '' || confirm_password == '') {
            alert('You have to fill up all fields to complete the sign up');
            return;
        }    

        if (!/^(([A-Za-z0-9]+_+)|([A-Za-z0-9]+\-+)|([A-Za-z0-9]+\.+)|([A-Za-z0-9]+\++))*[A-Za-z0-9]+@((\w+\-+)|(\w+\.))*\w{1,63}\.[a-zA-Z]{2,6}$/.test(email)) {
            alert('Invalid email address.');
            return;
        }

        if(first_password.length < 6){
            alert('password have to be at least 6 characters.');    
            return;
        }        

        if(first_password != confirm_password){
            alert('Both passwords are not match.');
            return;
        }

        $http.post('/api/sign-up', {
            first_name : first_name,
            last_name : last_name,
            email : email,
            nric : nric,
            dob : dob,            
            gender : gender,
            address1 : address1,
            address2 : address2,
            post_code : post_code,
            city   : city,
            state : state,
            mobile_number :  mobile,           
            home_number :  home_number,           
            office_number :  office_number,           
            fax_number : fax_number,
            password : confirm_password
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
