<html>
<head>
    <script src="{{url('assets/js/angular.min.js')}}"></script>
    <script src="{{url('assets/js/angular.min.js')}}"></script>
    <script>
        var myApp = angular.module('myApp', []);

        myApp.directive('fileModel', ['$parse', function ($parse) {
            return {
                restrict: 'A',
                link: function(scope, element, attrs) {
                    var model = $parse(attrs.fileModel);
                    var modelSetter = model.assign;

                    element.bind('change', function(){
                        scope.$apply(function(){
                            modelSetter(scope, element[0].files[0]);
                        });
                    });
                }
            };
        }]);

        myApp.service('fileUpload', ['$http', function ($http) {
            this.uploadFileToUrl = function(file, uploadUrl,texs){
                var fd = new FormData();
                fd.append('filea', file);

                fd.append('a',texs[0]);
              //  fd.append('ghi','jkl')
                $http.post(uploadUrl, fd, {
                            transformRequest: angular.identity,
                            headers: {'Content-Type': undefined}
                        })
                        .success(function(){
                        })
                        .error(function(){
                        });

            }
        }]);

        myApp.controller('myCtrl', ['$scope', 'fileUpload','$http', function($scope, fileUpload,$http){

            $scope.uploadFile = function(){
                var file = $scope.myFile;

                console.log('file is ' );
                console.dir(file);
                if(!$scope.myFile){
                    alert('no dd');
                }
//                alert($scope.myFile.size);
                var uploadUrl = "http://localhost/metro/metrop/public/showimagedetails";
                var texs=[];
 texs[0]=$scope.tex;
                fileUpload.uploadFileToUrl(file, uploadUrl,texs);

            };

        }]);

    </script>
</head>
<body ng-app="myApp"><div ng-controller = "myCtrl">
    <input type="file" file-model="myFile"/>
    <input type="text" ng-model="tex">
    <button ng-click="uploadFile()">upload me</button>
</div>
</body>
</html>