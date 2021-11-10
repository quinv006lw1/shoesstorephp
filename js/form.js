var app = angular.module("myApp", []);
app.controller("myCtrl", function($scope) {			
    $scope.submitForm = function() {

        if ($scope.userForm.$valid) {
            alert('May Report finished.');
        }

    };
    $scope.Submit = function() {
        alert('Đăng kí thành công!!!')
    }
    
});