var App = App || angular.module('detdetApp', []);

App.controller('MainController', function($scope, $http){
    $scope.categoryMain = [];
    $scope.pagination = [];
    $scope.pageTotal = 1;
    $scope.pageSize = 15;
    $scope.page = 1;

    $scope.init = function() {     
       $scope.fetchCategory(1, $scope.pageSize); 
    }

    $scope.newCategoryMain = function() {

        var categoryMainName = angular.element("#category-main").val();

        if (categoryMainName == '') {
            alert('Please enter new category name and continue.');
            return;
        }
       
        $http.post('/api/admin/category/main', {
            "name": categoryMainName
        }).success(function(data, status, headers, config) {
            if (data.status == 'success') {
                alert("success");
            } else {
                alert('name aleready exist');
                console.log(data.message);
            }
        });
    }

    $scope.fetchCategory = function(page, pageSize){  
        var pageSize = pageSize || $scope.pageSize;

        page = (page < 1)?1:page;
        page = (page < $scope.pageTotal)?$scope.pageTotal:page;

        $scope.categoryMain = [];
        $http.get('/api/admin/category/main?' + [
            'page=' + page,
            'page_size=' + pageSize
        ].join('&')).success(function(data, status, headers, config) {
            if (data.status == 'success') {
                $scope.categoryMain = data.data;
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

    // $scope.categoryMainEnable = function(imageId , enable){ 
    //     console.log(imageId)
    //     $http.put('/api/admin/banner/category_main/'+imageId+'/enable/', {
    //         'enable' : enable
    //     }).success(function(data, status, headers, config) {
    //         if (data.status == 'success') {
    //             $scope.fetchCategory($scope.page, $scope.pageSize);
    //         } else {
    //             alert(data.message);
    //         }
    //     });
    // }
});	
