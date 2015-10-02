var App = App || angular.module('detdetApp', []);

App.controller('MainController', function($scope, $http){
    $scope.advertisement = [];
    $scope.pagination = [];
    $scope.pageTotal = 1;
    $scope.pageSize = 15;
    $scope.page = 1;

    $scope.init = function() {     
       $scope.fetchAvtList(1, $scope.pageSize); 
    }

    $scope.fetchAvtList = function(page, pageSize){  
        var pageSize = pageSize || $scope.pageSize;

        page = (page < 1)?1:page;
        page = (page > $scope.pageTotal)?$scope.pageTotal:page;

        $scope.advertisement = [];
        $http.get('/api/admin/banner/advertisement?' + [
            'page=' + page,
            'page_size=' + pageSize
        ].join('&')).success(function(data, status, headers, config) {
            if (data.status == 'success') {
                $scope.advertisement = data.data.advertisement;
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

    $scope.removeImg = function(imageId){  
        $http.delete('/api/admin/banner/advertisement/'+imageId).success(function(data, status, headers, config) {
            if (data.status == 'success') {
                alert('image removed');
                location = "/admin/advertisement";
            } else {
                alert(data.message);
            }
        });
    }

    $scope.avtEnable = function(imageId , enable){ 
        console.log(imageId)
        $http.put('/api/admin/banner/advertisement/'+imageId+'/enable/', {
            'enable' : enable
        }).success(function(data, status, headers, config) {
            if (data.status == 'success') {
                $scope.fetchAvtList($scope.page, $scope.pageSize);
            } else {
                alert(data.message);
            }
        });
    }
});	
