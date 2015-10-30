var App = App || angular.module('detdetApp', []);

App.controller('MainController', function ($scope, $http){

    $scope.rootAmmount = [];
    $scope.onRootAmmount = {}; 

    $scope.init = function() {     
        $scope.fetchRootAmmount(); 
    }

    $scope.fetchRootAmmount = function(){  
        $scope.rootAmmount = [];
        $scope.onRootAmmount = {};
        $http.get('/api/member/top-up/list').success(function(data, status, headers, config) {
            if (data.status == 'success') {
                $scope.rootAmmount = data.data.topup_amount; 
                console.log($scope.rootAmmount);
                if($scope.rootAmmount.length > 0){
                    $scope.onRootAmmount = $scope.rootAmmount[0].detdetcoin;                
                } 
            } else {
                alert(data.message);
            }
        });  
    } 

    $scope.rootAmmountChanged = function(){
        console.log($scope.onRootAmmount);
        // $scope.fetchOutstanding($scope.onRootAmmount);
    } 


});