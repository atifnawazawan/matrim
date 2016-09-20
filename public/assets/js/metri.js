/**
 * Created by atif on 8/23/2016.
 */
var app = angular.module('mainApp', ['ngCookies','ngFileUpload','ui.bootstrap']);
app.controller("LoginController",['$cookies','$scope','$http','$uibModal', function($cookies,$scope,$http,$uibModal) {
        //alert('madina pak');
          //  $scope.tok=$cookies.get('XSRF-TOKEN');
        //alert($scope.tok);
    $scope.open = function (tex) {

        var modalInstance = $uibModal.open({
            animation: $scope.animationsEnabled,
            templateUrl: 'myModalContent.html',
            controller: 'ModalInstanceCtrl',
            size: 'md',
            resolve: {
                items: function () {
                    return tex;
                }
            }
        });

        modalInstance.result.then(function (selectedItem) {
            $scope.selected = selectedItem;
        }, function () {
            $log.info('Modal dismissed at: ' + new Date());
        });
    };
       /*$http({
        datatype:'json',
        method  : 'post',
        data : 'id=2',
        //web
       // url :'http://www.pothohar.khadimheavytransport.com/laravel/public/allprofile',
        url     : 'http://localhost/metro/metrop/public/allprofile',

        // mobile
        //   url     : 'http://192.168.8.102/prosfiles/CodeIgniter/index.php/data/categorypros',
        //localhost
        //  url     : 'http://localhost/prosfilesupdated/prosfiles/CodeIgniter/index.php/data/categorypros',
        //x-www-form-urlencoded
            headers : {'Content-Type': 'application/x-www-form-urlencoded'}
         })
            .success(function(data) {
           // alert(JSON.stringify(data)+'i love baghdad');
            $scope.profiles=data;

        })
        .error(function(data){


            $scope.suc='please try later!!';
            $scope.open($scope.suc);

        });*/
        $scope.loginform=function(){
        //  alert('makkah');
        $http({
        datatype:'json',
        method  : 'post',
        //  data : 'id='+$scope.id,
        //web
        //url     : 'http://localhost/metro/metrop/public/allprofile',
        url: 'http://localhost/metro/metrop/Laravel/public/api/auth/login',
        data : 'email=atif@atf.com&password=aaaaaa',


        // mobile
        //   url     : 'http://192.168.8.102/prosfiles/CodeIgniter/index.php/data/categorypros',
        //localhost
        //  url     : 'http://localhost/prosfilesupdated/prosfiles/CodeIgniter/index.php/data/categorypros',
         //x-www-form-urlencoded
        headers : {'Content-Type': 'application/x-www-form-urlencoded'}
           })
        .success(function(data) {
          //        alert(JSON.stringify(data)+'i love baghdad');
            $scope.profiles=data;

        })
        .error(function(data){
      //      alert(JSON.stringify(data));

      });
        /*
            $http({
            datatype:'json',
            method:'post',
            data:'id=1&_token='+$scope.tok,
            url:'http://localhost/metro/metrop/public/allprofile?id=1',
                    headers : {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': $scope.tok,

                    },

            }).success(function(data){
                alert(JSON.stringify(data)+'i lv madina');
            }).error(function(data){
                alert(JSON.stringify(data)+'i lv makkah');

            });
        */
        /*
            $http({
            datatype:'json',
            method  : 'get',
          // data : 'pr=all',
            //web
            url     : 'http://localhost/metro/metrop/public/allprofile?id=1',

            // mobile
            //   url     : 'http://192.168.8.102/prosfiles/CodeIgniter/index.php/data/categorypros',
            //localhost
            //  url     : 'http://localhost/prosfilesupdated/prosfiles/CodeIgniter/index.php/data/categorypros',
            //x-www-form-urlencoded
            headers : {'Content-Type': 'application/x-www-form-urlencoded'}
            })
            .success(function(data) {
              alert(JSON.stringify(data));
               $scope.profiles=data;

            })
            .error(function(data){
           //  alert(JSON.stringify(data));

          });
        */
              //    alert($scope.email);
               //  alert($scope.id);
        /*  $http({
            datatype:'json',
            method  : 'get',
          // data : 'pr=all',
            //web
            url     : 'http://localhost/metro/metrop/public/allprofile?id=1',

            // mobile
            //   url     : 'http://192.168.8.102/prosfiles/CodeIgniter/index.php/data/categorypros',
            //localhost
            //  url     : 'http://localhost/prosfilesupdated/prosfiles/CodeIgniter/index.php/data/categorypros',
            }
            //x-www-form-urlencoded
             headers : {'Content-Type': 'application/json'}
                })
                .success(function(data) {
              alert(JSON.stringify(data));
              // $scope.profiles=data;

            })
            .error(function(data){
             alert(JSON.stringify(data));


            });
        */
        }

        $scope.a='madina';
         //alert($scope.a);
}]);
app.controller("RightController",function($scope,$window){
    $scope.findbyid=function(){
       // $window.location.href='http://www.pothohar.khadimheavytransport.com/laravel/public/profile/'+$scope.id;
          $window.location.href='http://localhost/metro/metrop/public/profile/'+$scope.id;

    }
});
app.controller("profileController",['$scope','$http','$uibModal',function($scope,$http,$uibModal){
    $scope.animationsEnabled = true;

    $scope.open = function (tex) {

        var modalInstance = $uibModal.open({
            animation: $scope.animationsEnabled,
            templateUrl: 'myModalContent.html',
            controller: 'ModalInstanceCtrl',
            size: 'md',
            resolve: {
                items: function () {
                    return tex;
                }
            }
        });

        modalInstance.result.then(function (selectedItem) {
            $scope.selected = selectedItem;
        }, function () {
            $log.info('Modal dismissed at: ' + new Date());
        });
    };
    $scope.messagebox=false;
    $scope.if7=true;
$scope.pre=function(ids){
    $http({
        //   datatype:'json',
        method  : 'post',
        data : {userid:ids},
        //web
        // url:'http://www.pothohar.khadimheavytransport.com/laravel/public/message',
        //localhost
        url     : 'http://localhost/metro/metrop/public/checkblockuser',
        // mobile
        // headers : {'Content-Type': 'application/x-www-form-urlencoded'}
    }).then(function(data) {
       // alert(JSON.stringify(data.data));

        if(ids==data.data){
            $scope.if7=false;
          //  alert('ids si true');
        }
        //alert('your message has been sent');
    },function(data){
      //  alert(JSON.stringify(data.data)+'fal');
           $scope.suc='Please try later!';
        $scope.open($scope.susc);


    });

}
    $scope.blockuser=function(bid){

        // alert(bid);
        $http({
            //   datatype:'json',
            method  : 'post',
            data : {userid:bid},
            //web
            // url:'http://www.pothohar.khadimheavytransport.com/laravel/public/message',
            //localhost
            url     : 'http://localhost/metro/metrop/public/blockuser',
            // mobile
            // headers : {'Content-Type': 'application/x-www-form-urlencoded'}
        }).then(function(data) {

            $scope.suc=JSON.stringify(data.data);
            $scope.open($scope.suc);


            $scope.if7=false;
            //alert('your message has been sent');
        },function(data){
           // alert(JSON.stringify(data.data)+'fal');
               alert('Please try later!');

        });
    }
    $scope.unblockuser=function(bid){

        // alert(bid);
        $http({
            //   datatype:'json',
            method  : 'post',
            data : {userid:bid},
            //web
            // url:'http://www.pothohar.khadimheavytransport.com/laravel/public/message',
            //localhost
            url     : 'http://localhost/metro/metrop/public/unblockuser',
            // mobile
            // headers : {'Content-Type': 'application/x-www-form-urlencoded'}
        }).then(function(data) {

            $scope.suc=JSON.stringify(data.data);
            $scope.open($scope.suc);
            $scope.if7=true;
            //alert('your message has been sent');
        },function(data){
          //  alert(JSON.stringify(data.data)+'fal');
               alert('Please try later!');

        });
    }
    $scope.showmessagebox=function(){
        $scope.messagebox=!$scope.messagebox;
    }
    $scope.messagebody=function(idd){
        //  alert($scope.messagetext+idd+'baghdad');
        $http({
            //   datatype:'json',
            method  : 'post',
            data : {messagebody:$scope.messagetext,to:idd,id:4},
            //web
            // url:'http://www.pothohar.khadimheavytransport.com/laravel/public/message',
            //localhost
            url     : 'http://localhost/metro/metrop/public/message',

            // mobile
            // headers : {'Content-Type': 'application/x-www-form-urlencoded'}
        }).then(function(data) {
            $scope.suc=JSON.stringify(data.data);
            $scope.open($scope.suc);            //alert('your message has been sent');
        },function(data){
            //alert(JSON.stringify(data.data)+'fal');
            $scope.suc='Please try later!';
$scope.open($scope.suc);
        });
        $scope.messagebox=false;
        $scope.messagetext='';


    }
    //  alert('madina');
    $scope.a='madina';
}])
app.controller("testController",['$scope','Upload','$timeout','$http','fileUpload', function($scope,Upload,$timeout,$http,fileUpload) {


    $scope.uploadFile = function(){
        var file = $scope.myFile;
        console.log('file is ' );
        console.dir(file);
        if(!$scope.myFile){
            alert('no dd');
        }
//       alert($scope.myFile.size);
        var uploadUrl = "http://localhost/metro/metrop/public/profile";
        var texs=[];
        texs[0]=$scope.first_name;
        texs[10]=$scope.gender;
        texs[11]=$scope.age;
        texs[16]=$scope.matri_time;
        fileUpload.uploadFileToUrl(file, uploadUrl,texs);

    };
    $scope.profileform=function(){
        alert($scope.first_name);
     if($scope.first_name=='' || $scope.last_name=='' || $scope.aboutme=='' || $scope.headline=='' || $scope.aboutme.length<7)
        {
            $scope.for2();
            return;
        }
        if ($scope.profession=='' ||  $scope.jobtitle=='' || $scope.age=='' || $scope.first_language=='' || $scope.subject_studied=='' || $scope.education_level=='' ||$scope.income==''    )
        {
            $scope.for3();
            return;
        }

        if($scope.country==''){
            $scope.er_country=true;


        }
        if($scope.province==''){
            $scope.er_province=true;
        }
        if($scope.city==''){
            $scope.er_city=true;
        }
        else if($scope.city=='' || $scope.country=='' || $scope.province==''){
            $scope.for3();
            return;
        }
        var file = $scope.myFile;
        var uploadUrl = "http://localhost/metro/metrop/public/profile";
        var texs=[];
        texs[0]=$scope.first_name;
        texs[1]=$scope.last_name;
        texs[2]=$scope.headline;
        texs[3]=$scope.aboutme;
        texs[4]=$scope.education_level;
        texs[5]=$scope.subject_studied;
        texs[6]=$scope.profession;
        texs[7]=$scope.jobtitle;
        texs[8]=$scope.first_language;
        texs[9]=$scope.income;
        texs[10]=$scope.gender;
        texs[11]=$scope.age;
        texs[12]=$scope.country;
        texs[13]=$scope.province;
        texs[14]=$scope.city;
        texs[15]=$scope.marital_status;
        texs[16]=$scope.matri_time;
        texs[17]=$scope.phone_no;
        fileUpload.uploadFileToUrl(file, uploadUrl,texs);
        //alert($scope.matri_time);
     //   alert($scope.first_name+'i love u bapa jan');
        /*$http({
            method:'post',
            data:{first_name:$scope.first_name,
                aboutme:$scope.aboutme,

            last_name:$scope.last_name,
            headline :$scope.headline,


            marital_status:$scope.marital_status,
            education_level:$scope.education_level,
            subject_studied:$scope.subject_studied,
            profession:$scope.profession,
            jobtitle:$scope.jobtitle,
            first_language:$scope.first_language,
            income:$scope.income,
                gender:$scope.gender,
                matri_time:$scope.matri_time,
                marital_status:$scope.marital_status,
            //  'photo'=>'image'
            //   'country_of_origin:$scope.,

            age:$scope.age,
            country:$scope.country,
            phone_no:$scope.phone_no,
            /!*  'pro_create_by:$scope.,
             'hide_pro:$scope.,
             *!/
        matri_time:$scope.matri_time,
            province:$scope.province,
            city:$scope.city,

            },
            url:'http://localhost/metro/metrop/public/profile',
           // datatype='json',

        })
            .then(function (response) {
            alert(JSON.stringify(response.data));
            $scope.er_country=false;
            $scope.er_province=false;
            $scope.er_city=false;
            if($scope.first_name=='' || $scope.last_name=='' || $scope.aboutme=='' || $scope.headline=='' || $scope.aboutme.length<7)
            {
                $scope.for2();
                return;
            }
            else if ($scope.profession=='')
            {
                $scope.for3();
                return;
            }
            else if($scope.country==''){
                $scope.er_country=true;


            }
            else if($scope.province==''){
                $scope.er_province=true;
            }
            else if($scope.city==''){
                $scope.er_city=true;
            }
            else if($scope.city=='' || $scope.country=='' || $scope.province==''){
                $scope.for3();
                return;
            }

            else{
                alert('madina');
            }

            // body...
        },
                function (data) {
            alert(JSON.stringify(data));
            // body...
        });*/

    }
        $scope.form1=true;
        $scope.form2=false;
        $scope.form3=false;
        $scope.for1=function(){
                $scope.form2=false;
                $scope.form1=true;
                $scope.form3=false;
            }
    $scope.gender='female';
    $scope.marital_status='single';
    $scope.matri_time='with in six month';
    $scope.first_name='';
    $scope.last_name='';
    $scope.headline='';
    $scope.aboutme='';
    $scope.profession='';
    $scope.country='';
    $scope.education_level='';
    $scope.subject_studied='';
    $scope.jobtitle='';
    $scope.first_language='';
    $scope.income='';
    $scope.province='';
    $scope.city='';
    $scope.phone_no='';
    $scope.age='';
$scope.for2=function(){
    //alert($scope.marital_status+'asd');

 $scope.er_fn=false;
 $scope.er_ln=false;
 $scope.er_hl=false;
    $scope.er_aboutme=false;
    $scope.er_aboutmelen=false;
// alert($scope.first_name);
    if($scope.first_name==''){
        $scope.er_fn=true;

    }
    if($scope.last_name==''){
        $scope.er_ln=true;

    }if($scope.headline==''){
        $scope.er_hl=true;

    }if($scope.aboutme==''){
        $scope.er_aboutme=true;

    }if($scope.aboutme.length<7){
        $scope.er_aboutmelen=true;

    }
    if($scope.first_name=='' || $scope.last_name=='' || $scope.aboutme=='' || $scope.headline=='' || $scope.aboutme.length<7)
    {
        $scope.for1();
        return;
    }
$scope.form1=false;
$scope.form2=true;
$scope.form3=false;
}
$scope.for3=function(){
    $scope.er_profession=false;
    $scope.er_education_level=false;
    $scope.er_subject_studied=false;
    $scope.er_jobtitle=false;
    $scope.er_income=false;
    $scope.er_first_language=false;
    $scope.er_age=false;
    if ($scope.profession=='')
    {
        $scope.er_profession=true;
    } if ($scope.first_language=='')
    {
        $scope.er_first_language=true;
    }
    if ($scope.age=='' || $scope.age==null)
    {
        $scope.er_age=true;
    }
    if ($scope.education_level=='')
    {
        $scope.er_education_level=true;
    }
    if ($scope.subject_studied=='')
    {
        $scope.er_subject_studied=true;
    }
    if ($scope.jobtitle=='')
    {
        $scope.er_jobtitle=true;
    }
    if ($scope.income=='')
    {
        $scope.er_income=true;
    }
    if ($scope.profession=='' ||  $scope.jobtitle=='' || $scope.age==''|| $scope.age==null || $scope.first_language=='' || $scope.subject_studied=='' || $scope.education_level=='' ||$scope.income==''    )
    {
        $scope.for2();
        return;
    }
$scope.form1=false;
$scope.form3=true;
$scope.form2=false;
}

    $scope.a='madina';
  //  alert('madina');
    $scope.uploadPic = function(file) {
        file.upload = Upload.upload({
            url: 'http://localhost/meto/metrop/public/uploads',
         //   url: 'http://www.pothohar.khadimheavytransport.com/laravel/public/uploads',
            data: {username: $scope.username, file: file},
        });

        file.upload.then(function (response) {
            $timeout(function () {
                file.result = response.data;
            });
        }, function (response) {
            if (response.status > 0)
                $scope.errorMsg = response.status + ': ' + response.data;
        }, function (evt) {
            // Math.min is to fix IE which reports 200% sometimes
            file.progress = Math.min(100, parseInt(100.0 * evt.loaded / evt.total));
        });
    }

}]);
app.controller("SimpleController",['$scope','$http','$location', function($scope,$http,$location) {
    var obj =$location.search();
    // Setting a cookie
    $http({
        datatype:'json',
        method  : 'get',
        // data : 'id=1',
        //web
      //  url :'http://www.pothohar.khadimheavytransport.com/laravel/public/allprofile?id='+obj.id,
        url     : 'http://localhost/metro/metrop/public/allprofile?id='+obj.id,

        // mobile
        //   url     : 'http://192.168.8.102/prosfiles/CodeIgniter/index.php/data/categorypros',
        //localhost
        //  url     : 'http://localhost/prosfilesupdated/prosfiles/CodeIgniter/index.php/data/categorypros',
  //x-www-form-urlencoded
        headers : {'Content-Type': 'application/x-www-form-urlencoded'}
    })
        .success(function(data) {
            //alert(JSON.stringify(data)+'i love baghdad');
            $scope.profiles=data;

        })
        .error(function(data){
            alert('please try later!!!');

        });
    $scope.a='madina';
   // alert($scope.a);
}]);

app.controller("viewProfileController",['$scope','$http','$location','$uibModal',function($scope,$http,$location, $uibModal){
  //  window.location.reload();

    $scope.animationsEnabled = true;

    $scope.open = function (tex) {

        var modalInstance = $uibModal.open({
            animation: $scope.animationsEnabled,
            templateUrl: 'myModalContent.html',
            controller: 'ModalInstanceCtrl',
            size: 'md',
            resolve: {
                items: function () {
                    return tex;
                }
            }
        });

        modalInstance.result.then(function (selectedItem) {
            $scope.selected = selectedItem;
        }, function () {
            $log.info('Modal dismissed at: ' + new Date());
        });
    };
   /* $scope.susc = 'welcome';
    $scope.open($scope.susc);
   */ var obj=$location.search();
    $http({
        datatype:'json',
        method  : 'get',
        // data : 'id=1',
        //web
        // url     : 'http://www.pothohar.khadimheavytransport.com/laravel/public/allprofile?id=1',
        url     : 'http://localhost/metro/metrop/public/allprofile?id='+obj.id,

        // mobile
        //   url     : 'http://192.168.8.102/prosfiles/CodeIgniter/index.php/data/categorypros',
        //localhost
        //  url     : 'http://localhost/prosfilesupdated/prosfiles/CodeIgniter/index.php/data/categorypros',
        //x-www-form-urlencoded
        headers : {'Content-Type': 'application/x-www-form-urlencoded'}
    })
        .success(function(data) {
            //
         /*   $scope.susc = 'succedd!!!';
            $scope.open($scope.susc);
          */  $scope.profiles=data;

        })
        .error(function(data){
            //alert(data);
            if(data=='Unauthorized.'){
                $scope.suc = 'please login to view searches.';
                $scope.open($scope.suc);

            }
            else {
                $scope.suc = 'please try later!!!';
                $scope.open($scope.suc);

            }

           // alert('please try later!!!');

        });
    $scope.oks=function(){
        window.location.href='http://localhost/metro/metrop/public/login';
    }

}]);
app.controller("specificProfileController",['$scope','$http','$location',function($scope,$http,$location){
$scope.profilefilter=function() {
   // alert(proid);
    window.location.reload();
    /*
    $http({
        datatype: 'json',
        method: 'get',
        // data : 'id=1',
        //web
        // url     : 'http://www.pothohar.khadimheavytransport.com/laravel/public/allprofile?id=1',
        url: 'http://localhost/metro/metrop/public/allprofile?id='+proid,

        // mobile
        //   url     : 'http://192.168.8.102/prosfiles/CodeIgniter/index.php/data/categorypros',
        //localhost
        //  url     : 'http://localhost/prosfilesupdated/prosfiles/CodeIgniter/index.php/data/categorypros',
        //x-www-form-urlencoded
        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
    })
        .success(function (data) {
                        alert(JSON.stringify(data));
            $scope.profiles = data;

        })
        .error(function (data) {
            alert('please try later!!!');

        });*/
}

}]);
app.controller('ModalInstanceCtrl', function ($scope, $uibModalInstance, items) {

    $scope.items = items;
    $scope.selected =$scope.items;


    $scope.ok = function () {
        $uibModalInstance.close($scope.selected.item);
    };
$scope.oks=function(){
    window.location.href='http://localhost/metro/metrop/public/login';
}
    $scope.cancel = function () {
        $uibModalInstance.dismiss('cancel');
    };
});

app.controller("panelController",['$scope','$http', function($scope,$http) {
$scope.madina='i love madina';
    $scope.tab1='in active';
    $scope.loc=function(x){
        $scope.tab1='';
        if(x==2){$scope.tab6='in active';}
    }

}]);


app.directive('fileModel', ['$parse', function ($parse) {
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

app.service('fileUpload', ['$http', function ($http) {
    this.uploadFileToUrl = function(file, uploadUrl,texs){
        var fd = new FormData();
        fd.append('photo', file);
        fd.append('first_name',texs[0]);
        fd.append('last_name',texs[1]);
        fd.append('headline',texs[2]);
        fd.append('aboutme',texs[3]);
        fd.append('education_level',texs[4]);
        fd.append('subject_studied',texs[5]);
        fd.append('profession',texs[6]);
        fd.append('jobtitle',texs[7]);
        fd.append('first_language',texs[8]);
        fd.append('income',texs[9]);
        fd.append('gender',texs[10]);
        fd.append('age',texs[11]);
        fd.append('country',texs[12]);
        fd.append('province',texs[13]);
        fd.append('city',texs[14]);
        fd.append('marital_status',texs[15]);
        fd.append('matri_time',texs[16]);
        fd.append('phone_no',texs[17]);
        //  fd.append('ghi','jkl')
        $http.post(uploadUrl, fd, {
                transformRequest: angular.identity,
                headers: {'Content-Type': undefined}
            })
            .success(function(data){
                alert(JSON.stringify(data));
                if(data.data=='success'){
                    window.location.href='http://localhost/metro/metrop/public/index';
                }

            })
            .error(function(){
            });

    }
}]);




/*
var app = angular.module('mainApp', ['ngFileUpload']);

app.controller('testController',['$scope','Upload','$timeout', function($scope,Upload,$timeout) {
   alert('madina');
    $scope.a='madina';
   /!* $scope.specidate=false;
    $scope.reward=5;
    $scope.sele1='selected';
    $scope.speci=function(){
        $scope.specidate=true;
    }
    $scope.specimin=function(){
        $scope.specidate=false;
    }
    $scope.sel1=function(){
        alert('madina');
        $scope.reward=5;

        $scope.sele1="selected";
        $scope.sele2='';
        $scope.sele3='';
    }
    $scope.sel2=function(){
        $scope.reward=10;

        $scope.sele1='';
        $scope.sele2='selected';
        $scope.sele3='';
    }
    $scope.sel3=function(){
        $scope.reward=15;

        $scope.sele1='';
        $scope.sele2='';
        $scope.sele3='selected';
    }
    $scope.uploadPic = function(file) {
        file.upload = Upload.upload({
            url: 'http://localhost/grab/uploads',
            data: {username: $scope.username, file: file},
        });

        file.upload.then(function (response) {
            $timeout(function () {
                file.result = response.data;
            });
        }, function (response) {
            if (response.status > 0)
                $scope.errorMsg = response.status + ': ' + response.data;
        }, function (evt) {
            // Math.min is to fix IE which reports 200% sometimes
            file.progress = Math.min(100, parseInt(100.0 * evt.loaded / evt.total));
        });
    }
    $scope.quantity='';
    $scope.quant=function() {
        $scope.quantity--;
        if ($scope.quantity < 1) {
            $scope.quantity = 1;
        }
    }
    $scope.exformsub=function(){
        window.location='http://localhost/grab/index.php/main/login'
    }*!/
}]);*/
