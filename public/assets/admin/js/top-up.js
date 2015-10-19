var App = App || angular.module('detdetApp', []);

App.controller('MainController', function($scope, $http) {
    $scope.searchResult = {};
    $scope.member = [];
    $scope.pagination = [];
    $scope.pageTotal = 1;
    $scope.pageSize = 15;
    $scope.page = 1;

    $scope.init = function() {     
       $scope.topUpList(1, 1, $scope.pageSize); 
    }

    $scope.topUpList = function(type, page, pageSize){ //not complete , when deny tab is blank , will error

        var pageSize = pageSize || $scope.pageSize,

        page = (page < 1)?1:page;
        page = (page > $scope.pageTotal)?$scope.pageTotal:page;

        $scope.topUp = [];
        $http.get('/api/admin/top-up/list/'+type+'?' + [
            'page=' + page,
            'page_size=' + pageSize,
        ].join('&')).success(function(data, status, headers, config) {
            if (data.status == 'success') {
                $scope.topUp = data.data.top_up;
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

    $scope.AccountTopUp = function(request_id , userId, amount ,status) {
        $http.post('/api/admin/top-up', {
            'request_id' : request_id,
            'user_id': userId,
            'amount': amount,
            'status': status,
        }).success(function(data, status, headers, config) {
            if (data.status == 'success') {
                alert('success')
                $scope.topUpList(1, 1, $scope.pageSize); 
            } else {
                alert(data.message);
            }
        });
    }

    // $scope.topUpDeny = function(request_id ){
    //     $http.put('/api/admin/top-up/deny', {
    //         'request_id' : request_id,
    //     }).success(function(data, status, headers, config) {
    //         if (data.status == 'success') {
    //             alert('success')
    //             $scope.topUpList(1, 1, $scope.pageSize); 
    //         } else {
    //             alert(data.message);
    //         }
    //     });
    //  }

    $scope.selectId = function(user_id,username,amount,description) {
        $scope.userId = user_id;
        $scope.username = username;
        $scope.amount = amount;
        $scope.description = description;
    }

});