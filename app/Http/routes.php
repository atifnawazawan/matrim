<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Message;
use App\User;
use App\Profile;
use Illuminate\Http\Request;

////////////Block User//////////

Route::post('/blockuser','BlockuserController@blockuser');
Route::post('/unblockuser','BlockuserController@unblockuser');
Route::post('/checkblockuser','BlockuserController@checkblockuser');

Route::get('/imageupload',function(){
   return view('main/imageupload');
});

Route::post('/showimagedetails','ProfileController@showimagedetails');

//////////////









Route::get('/messages', 'MessageController@index');
Route::post('/message', 'MessageController@store');
Route::get('/', function () {
    return view('welcome');
});
Route::post('/registe',function(REQUEST $request){
    return $request->all();
});

Route::get('/index', function () {
    return view('main.index');
});
Route::get('/viewed-profile', function () {
    return view('main/viewed_profile');
});
Route::get('/login', function () {
    return view('main/login');
});
Route::get('/message/{id}', function ($id) {
    return view('main/message',['id'=>$id]);
});
/*
Route::post('/message', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'messagebody' => 'required|max:2',
    ]);

    if ($validator->fails()) {
        return redirect('/message')
            ->withInput()
            ->withErrors($validator);
    }
    $message = new Message;
    $message->messagebody = $request->messagebody;
    $message->save();

    return redirect('/premessage');

    // Create The Task...
});
*/
Route::post('/send', 'EmailController@send');
Route::get('/send', 'EmailController@send');


Route::get('/premessage', 'MessageController@premessage');
Route::get('/sent', 'MessageController@sent');
Route::auth();

Route::get('/home', ['uses'=>'HomeController@index','as'=>'name']);
$router->get('/ages', function () {
    echo route('name');

});
Route::get('/matches',function(){
    return view('main.matches');
});
Route::get('/viewprofiles',function(){
    return view('main.viewprofiles');

});
Route::any('/allprofile', 'ProfileController@allprofile');
Route::get('/allmatch', 'ProfileController@allmatches');
Route::get('/profile/singles','ProfileController@singles');
Route::get('/loginav',function(){
    return view('auth.loginav');
});
Route::resource('profile','ProfileController');

Route::get('/bureaupanel','BureauprofileController@index');
Route::resource('bureauprofile','BureauprofileController');
Route::resource('bclient','BclientController');
/*
 *
 Route::resource('noti','NotiController');
$router->get('profile/{user}', function(App\User $user) {
    //
    echo json_encode( $user->email);

});


/ profile controller//
Route::get('/createprofile',function(){
    return view('main/create_profile');
});
Route::get('/editprofile/',function(){
    return view('main/edit_profile',['data'=>App\Profile::findorfail(1)]);
});

Route::get('/profile', 'ProfileController@index');
Route::post('/profile', 'ProfileController@store');
Route::post('/profile/{id}', 'ProfileController@update');
*/