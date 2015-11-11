var App = App || angular.module('detdetApp', []);

App.controller('MainController', function($scope, $http){
    $scope.categoryMain = [];
    $scope.pagination = [];
    $scope.pageTotal = 1;
    $scope.pageSize = 10;
    $scope.page = 1;
    $scope.onCategory = {};

    $scope.init = function() {     
       $scope.fetchMainCategory(1, $scope.pageSize); 
       $scope.fetchSubCategory(1, $scope.pageSize); 
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
                $scope.fetchMainCategory( $scope.page , $scope.pageSize); 
            } else {
                alert(data.message);
            }
        });
    }

    $scope.fetchMainCategory = function(page, pageSize){  
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

    $scope.MainCtgEnable = function(id , enable){ 
        $http.put('/api/admin/category/'+id+'/main', {
            'enable' : enable
        }).success(function(data, status, headers, config) {
            if (data.status == 'success') {
                $scope.fetchMainCategory($scope.page, $scope.pageSize);
            } else {
                alert(data.message);
            }
        });
    }

    $scope.removeMainCategory = function(id){  
        $http.delete('/api/admin/category/'+id+'/main').success(function(data, status, headers, config) {
            if (data.status == 'success') {
                alert('category removed');
                $scope.fetchMainCategory($scope.page, $scope.pageSize);
            } else {
                alert(data.message);
            }
        });
    }

    $scope.newCategorySub = function() {

        var categorySubName = angular.element("#name-sub").val(),
            sequenceSub = angular.element("#sequence-sub").val();

        if(categorySubName == ''){
            alert('please fill in the name');
            return;
        }

       if(!$scope.mainCategoryId){
            alert('please select main category.');
            return;
       }

        $http.post('/api/admin/category/sub', {
            'name': categorySubName,
            'sequence': sequenceSub,
            'main_id': $scope.mainCategoryId.id
        }).success(function(data, status, headers, config) {
            if (data.status == 'success') {
                alert("success");
                $scope.fetchSubCategory( $scope.page , $scope.pageSize); 
                $scope.fetchMainCategory(1, $scope.pageSize); 

            } else {
                alert(data.message);
            }
        });
    }

    $scope.mainCId = function() {
        $scope.mainCategoryId = $scope.onCategory

    }

    $scope.fetchSubCategory = function(page, pageSize){  
        var pageSize = pageSize || $scope.pageSize;

        page = (page < 1)?1:page;
        page = (page > $scope.pageTotal)?$scope.pageTotal:page;

        $scope.categoryMain = [];
        $http.get('/api/admin/category/sub?' + [
            'page=' + page,
            'page_size=' + pageSize
        ].join('&')).success(function(data, status, headers, config) {
            if (data.status == 'success') {
                $scope.categorySub = data.data.category_sub;
                $scope.categoryMain2 = data.data.category_main;
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

    $scope.SubCtgEnable = function(id , enable){
        $http.put('/api/admin/category/'+id+'/sub', {
            'enable' : enable
        }).success(function(data, status, headers, config) {
            if (data.status == 'success') {
                $scope.fetchSubCategory($scope.page, $scope.pageSize);
            } else {
                alert(data.message);
            }
        });
    }

    $scope.removeSubCategory = function(id){  
        $http.delete('/api/admin/category/'+id+'/sub').success(function(data, status, headers, config) {
            if (data.status == 'success') {
                alert('category removed');
                $scope.fetchSubCategory($scope.page, $scope.pageSize);
            } else {
                alert(data.message);
            }
        });
    }
});	
