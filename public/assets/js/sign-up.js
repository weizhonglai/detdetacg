var App = App || angular.module('detdetApp', []);

App.controller('MainController', function($scope, $http){

    $scope.init = function() {        
        //BEGIN PLUGINS DATE RANGE PICKER
        $('input[name="daterangepicker-default"]').daterangepicker();
        $('input[name="daterangepicker-date-time"]').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' });
        $('.reportrange').daterangepicker(
            {
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                    'Last 7 Days': [moment().subtract('days', 6), moment()],
                    'Last 30 Days': [moment().subtract('days', 29), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                },
                startDate: moment().subtract('days', 29),
                endDate: moment(),
                opens: 'left'
            },
            function(start, end) {
                $('.reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                $('input[name="datestart"]').val(start.format("YYYY-MM-DD"));
                $('input[name="endstart"]').val(end.format("YYYY-MM-DD"));
            }
        );
        $('.reportrange span').html(moment().subtract('days', 29).format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
        //END PLUGINS DATE RANGE PICKER

        //BEGIN PLUGINS DATE PICKER
        $('.datepicker-default').datepicker();
        $('.datepicker-years').datepicker({
            startView: 1,
            minViewMode: 2
        });
        $('.input-daterange').datepicker({
            format: "yyyy-mm-dd"
        });
        $('.datepicker-inline').datepicker({
            format: "yyyy-mm-dd",
            startView: 2,
            minViewMode: 1
        });
        //END PLUGINS DATE PICKER

        // BEGIN PLUGIN MASK INPUT
        $("#date").mask("999999-99-9999");
        $("#phone").mask("(999) 999-9999");
        $("#product-key").mask("(aa) 99-999")
        // END PLUGIN MASK INPUT
    }

    $scope.signUp = function() {
        
        var first_name = angular.element("input.first_name").val(),
            last_name = angular.element("input.last_name").val(),  
            domain = angular.element("input.mail_domain").val(), 

            mail = angular.element("select.mail_sys").val(),   
            email = domain + '@' + mail, 

            nric = angular.element("input.nric").val(),
            passport = angular.element("input.passport").val(),
            dob = angular.element("input.dob").val(),
            gender = angular.element(".option_gender input:checked").val(),
            address1 = angular.element("input.address1").val(),
            address2 = angular.element("input.address2").val(),
            post_code = angular.element("input.post_code").val(),
            city   = angular.element("input.city").val(),
            state = angular.element("select.state").val(),

            phone_area_code = angular.element("input.phone_area_code").val(),
            phone_num = angular.element("input.phone_num").val(),
            mobile = '01' + phone_area_code + '-' + phone_num;

            home_area_code = angular.element("input.home_area_code").val(),
            home_num = angular.element("input.home_num").val(),
            home_number = '0' + home_area_code + '-' + home_num;

            office_area_code = angular.element("input.office_area_code").val(),
            office_num = angular.element("input.office_num").val(),
            office_number = '0' + office_area_code + '-' + office_num;
            fax_number = angular.element("input.fax_number").val(),

            username = angular.element(".inputfield input.username").val(),
            first_password = angular.element("input.first_password").val(),
            confirm_password = angular.element("input.confirm_password").val();
        alert(username);
        if (first_name == '' || last_name == '' || mail == ''|| nric == '' || passport == '' || dob == '' || username == '' || first_password == '' || confirm_password == '') {
            alert('You have to fill up all fields to complete the sign up');
            return;
        }    

        if(passport.length < 9){
            alert('passport have to be at least 9 characters.');    
            return;
        } 

        if(phone_area_code == '' && phone_num == '') {
            if(office_area_code == '' && office_num == '') {
                if(home_area_code == '' && home_num == '') {
                    alert('You have to fill up at least one phone number');
                }
            }
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
            username : username,
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
