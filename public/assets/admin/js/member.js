var App = App || angular.module('detdetApp', []);

App.controller('MainController', function($scope, $http){
    $scope.searchResult = {};
    $scope.member = [];
    $scope.pagination = [];
    $scope.pageTotal = 1;
    $scope.pageSize = 50;
    $scope.page = 1;

    $scope.init = function() {     
       $scope.fetchMemberList(1, $scope.pageSize); 
    }

    $scope.fetchMemberList = function(page, pageSize){  
        var pageSize = pageSize || $scope.pageSize;

        page = (page < 1)?1:page;
        page = (page > $scope.pageTotal)?$scope.pageTotal:page;

        searchValue = angular.element(".search input").val();

        $scope.member = [];
        $http.get('/api/admin/member/list?' + [
            'page=' + page,
            'page_size=' + pageSize,
            'search=' + searchValue
        ].join('&')).success(function(data, status, headers, config) {
            if (data.status == 'success') {
                $scope.member = data.data;

                $scope.pagination = [];
                $scope.page = +data.data.page;
                $scope.pageTotal = +data.data.pageTotal;
                for(var i=1; i<=data.data.pageTotal; i++ ){
                    $scope.pagination.push({no: i, active: i==data.data.page});
                }
            } else {
                alert(data.message);
            }
        });  
    }


    $scope.resetMemberPassword = function(userId, send_email) {

        var newPass = angular.element(".new-pass input").val(),
            confirmPass = angular.element(".confirm-pass input").val();

        if (newPass == '' || confirmPass == '') {
            alert('Fill in all fields to proceed.');
            return;
        }

        if(password1.length < 6){
            alert('Password have to be atleast 6 characters.');
            return;
        }      

        if(confirmPass != newPass){
            alert('Password are not match.');
            return;
        }

        $http.put('/api/admin/member/'+userId+'/reset-password', {
            'password': newPass,
            'send_email': send_email
        }).success(function(data, status, headers, config) {
            if (data.status == 'success') {
                alert('Your password has reset-password successfully.');
                location = "/admin";
            } else {
                alert(data.message);
            }
        });
    } 

});	
