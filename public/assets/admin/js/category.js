var App = App || angular.module('detdetApp', []);

App.controller('MainController', function($scope, $http){
    $scope.categoryMain = [];
    $scope.pagination = [];
    $scope.pageTotal = 1;
    $scope.pageSize = 10;
    $scope.page = 1;

    $scope.init = function() {     
       $scope.fetchCategory(1, $scope.pageSize); 
    }

    $scope.newCategoryMain = function() {

        var categoryMainName = angular.element("#category-main").val(),
            sequence = angular.element("#sequence").val();

        if (categoryMainName == '') {
            alert('Please enter new category name and continue.');
            return;
        }
       
        $http.post('/api/admin/category/main', {
            'name': categoryMainName,
            'sequence': sequence
        }).success(function(data, status, headers, config) {
            if (data.status == 'success') {
                alert("success");
                $scope.fetchCategory( $scope.page , $scope.pageSize); 
            } else {
                alert(data.message);
            }
        });
    }

    $scope.fetchCategory = function(page, pageSize){  
        var pageSize = pageSize || $scope.pageSize;

        page = (page < 1)?1:page;
        page = (page > $scope.pageTotal)?$scope.pageTotal:page;

        $scope.categoryMain = [];
        $http.get('/api/admin/category/main?' + [
            'page=' + page,
            'page_size=' + pageSize
        ].join('&')).success(function(data, status, headers, config) {
            if (data.status == 'success') {
                $scope.categoryMain = data.data.category_main;
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

    $scope.avtEnable = function(id , enable){ 
        $http.put('/api/admin/category/'+id+'/main', {
            'enable' : enable
        }).success(function(data, status, headers, config) {
            if (data.status == 'success') {
                $scope.fetchCategory($scope.page, $scope.pageSize);
            } else {
                alert(data.message);
            }
        });
    }

    $scope.removeCategory = function(id){  
        $http.delete('/api/admin/category/'+id+'/main').success(function(data, status, headers, config) {
            if (data.status == 'success') {
                alert('category removed');
                $scope.fetchCategory($scope.page, $scope.pageSize);
            } else {
                alert(data.message);
            }
        });
    }
});	
