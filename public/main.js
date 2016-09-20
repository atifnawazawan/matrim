/**
 * Created by atif on 8/23/2016.
 */
var app = angular.module("mainApp", []);
app.controller("SimpleController",['$scope','$http','$location', function($scope,$http,$location) {
    var obj =$location.search();
    // Setting a cookie
    alert('madina');
    $http({
        datatype:'json',
        method  : 'get',
       // data : 'id=1',
        //web
        url     : 'http://localhost/metro/metrop/public/allprofile?id='+obj.id,

        // mobile
        //   url     : 'http://192.168.8.102/prosfiles/CodeIgniter/index.php/data/categorypros',
        //localhost
        //  url     : 'http://localhost/prosfilesupdated/prosfiles/CodeIgniter/index.php/data/categorypros',
//x-www-form-urlencoded
        headers : {'Content-Type': 'application/x-www-form-urlencoded'}
    })
        .success(function(data) {
          alert(JSON.stringify(data)+'i love baghdad');
           $scope.profiles=data;

        })
        .error(function(data){
       alert(JSON.stringify(data));

    });
   $scope.a='madina';
  alert($scope.a);
}]);
app.controller("RightController",function($scope,$window){
    $scope.findbyid=function(){
        $window.location.href='/metro/metrop/public/profile/'+$scope.id;
    }
});

