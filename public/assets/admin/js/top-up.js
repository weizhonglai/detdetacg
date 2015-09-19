var App = App || angular.module('detdetApp', []);

App.controller('MainController', function($scope, $http) {
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

    $scope.topUp = function() {
        var userid = angular.element("input.userid").val(),
            amount = angular.element("input.amount").val(),
            password = angular.element("input.password").val();

        if (userid == '' || amount == ''|| password == '') {
            alert('Please fill out all the contents and continue.');
            return;
        }

       
        $http.put('/api/admin/member/account-topup', {
            'user_id': userid,
            'amount': amount,
            'password': password

        }).success(function(data, status, headers, config) {
            if (data.status == 'success') {
                location = "/admin/top-up";
            } else {
                alert('account not found');
                console.log(data.message);
            }
        });
    }
});