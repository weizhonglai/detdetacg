var App = App || angular.module('detdetApp', []);

App.controller('MainController', function($scope, $http){

    $scope.topUpHistory = [];
    $scope.pagination = [];
    $scope.pageTotal = 1;
    $scope.pageSize = 25;
    $scope.page = 1;
    $scope.totalType = "topUp";

    $scope.init = function(id) {     
       $scope.fetchMemberDetail(id , 1, $scope.pageSize); 
    }

    $scope.fetchMemberDetail = function(id, page, pageSize ){  
        var pageSize = pageSize || $scope.pageSize,
            totalType = $scope.totalType;

        page = (page < 1)?1:page;
        page = (page > $scope.pageTotal)?$scope.pageTotal:page;

        $http.get('/api/admin/member/'+id+'/detail?' + [
            'page=' + page,
            'page_size=' + pageSize,
            'total_type=' + totalType
        ].join('&')).success(function(data, status, headers, config) {
            if (data.status == 'success') {
                $scope.topUpHistory = data.data.top_up_history;
                $scope.pagination = [];
                $scope.page = +data.data.page;
                $scope.pageTotal = +data.data.pageTotal;
                for(var i=1; i<=data.data.pageTotal; i++ ){
                    $scope.pagination.push({no: i, active: i==data.data.page});
                }
                console.log($scope.topUpHistory)
            } else {
                alert(data.message);
            }
        });  
    }

});	
