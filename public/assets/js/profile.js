var App = App || angular.module('detdetApp', []);

App.controller('MainController', function ($scope, $http){

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
        $("#phone").mask("999-9999999");
        $("#product-key").mask("(aa) 99-999")
        // END PLUGIN MASK INPUT
    }

    $scope.updateInfo = function() {

        var first_name = angular.element(".first_name input").val(),
            last_name = angular.element(".last_name input").val(),
            email = angular.element(".email input").val(),
            dob = angular.element(".dob input").val(),
            nric = angular.element(".nric input").val(),
            passport = angular.element(".passport input").val();
            gender = angular.element(".gender input:checked").val();
            address1 = angular.element(".address1 input").val();
            address2 = angular.element(".address2 input").val();
            post_code = angular.element(".post_code input").val();
            city = angular.element(".city input").val();
            state = angular.element(".state input").val();
            mobile = angular.element(".mobile input").val();
            home = angular.element(".home input").val();
            office = angular.element(".office input").val();
            fax = angular.element(".fax input").val();
            
        /*if (first_name == '' || last_name == '' || email == '' || dob == '' || nric == '' || passport == '' || gender == '' || 
            address1 == '' || address2 == '' || post_code == '' || city == '' || state == '' || home == '' || mobile == '' ||
            office == '' || fax == '' ) {
            alert('You have to fill up all fields to complete the sign up');
            return;
        }  */
        
        if (nric == '') { nric = '' }
        if (passport == '') { passport = '' }
        if (address1 == '') { address1 = '' }
        if (address2 == '') { address2 = '' }
        if (post_code == '') { post_code = '' }
        if (city == '') { city = '' }
        if (state == '') { state = 'aa' }
        if (mobile == '') { mobile = '' }
        if (home == '') { home = '' }
        if (office == '') { office = '' }
        if (fax == '') { fax = '' }
        
        $http.put('/api/member/info/update', {
            first_name: first_name,
            last_name: last_name,
            email: email,
            nric: nric,
            passport: passport,
            address1: address1,
            address2: address2,
            post_code: post_code,
            city: city,
            state: state,
            mobile_number: mobile,
            office_number: office,
            home_number: home,
            fax_number: fax,
            gender: gender,
            dob: dob,
        }).success(function(data, status, headers, config) {
            if (data.status == 'success') {
                alert('Success update');
                location.reload();
            } else {
                alert(data.message);
            }

        });
    }
});