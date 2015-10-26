var App = App || angular.module('detdetApp', []);

App.controller('MainController', function($scope, $http) {

    $scope.init = function() {     
       $scope.amountList(); 
    }

    $scope.amountList = function(){ //not complete , when deny tab is blank , will error
        $scope.amount = [];
        $http.get('/api/admin/top-up/amount/list').success(function(data, status, headers, config) {
            if (data.status == 'success') {
                $scope.amount = data.data;
            } else {
                alert(data.message);
            }
        });  
    }

    $scope.amountCreate = function() {
        var amount = angular.element("#amount").val(),
            detdetcoin = angular.element("#detdetcoin").val();

        if (amount == '' || detdetcoin == '') {
            alert('Please enter both amount & detdetcoin.');
            return;
        }

        $http.post('/api/admin/top-up/amount', {
            'amount' : amount,
            'detdetcoin': detdetcoin
        }).success(function(data, status, headers, config) {
            if (data.status == 'success') {
                alert('success');
                $scope.amountList(); 
            } else {
                alert(data.message);
            }
        });
    }

    $scope.amountDelete = function(id) {
        $http.delete('/api/admin/top-up/amount/'+id).success(function(data, status, headers, config) {
            if (data.status == 'success') {
                alert('amount removed');
                $scope.amountList();
            } else {
                alert(data.message);
            }
        });
    }

    $scope.amountEnable = function(id , enable){ 
        $http.put('/api/admin/top-up/amount/'+id, {
            'enable' : enable
        }).success(function(data, status, headers, config) {
            if (data.status == 'success') {
                $scope.amountList();
            } else {
                alert(data.message);
            }
        });
    }

});