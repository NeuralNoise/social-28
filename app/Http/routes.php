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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
	Route::get('/', function () {
	    return view('welcome');
	})->name('home');

	Route::get('/testApi', [
	    'uses' => 'TestApiController@getTest',
			'as' => 'testApi'
	]);

	Route::post('/signup',[
		'uses' => 'UserController@postSignUp',
		'as' => 'signup'
	]);
//Route::group(['middleware' => ['web']],function(){


	Route::post('/signin',[
		'uses' => 'UserController@postSignIn',
		'as' => 'signin'
	]);

	Route::get('/dashboard',[
		'uses' => 'PostController@getDashboard',
		'as' => 'dashboard',
		'middleware'=>'auth'
	]);

	Route::get('/testview',[
		'uses' => 'TestController@index',
		'as' =>'testview'
	]);

	Route::post('/testSave',[
		'uses' => 'TestController@testSave',
		'as' =>'testSave'
	]);
	Route::get('/testall',[
		'uses' => 'TestController@getTest',
		'as' =>'testall'
	]);

	Route::post('/createpost',[
		'uses' =>'PostController@postCreatePost',
		'as' => 'post.create',
		'middleware' => 'auth'
	]);

	Route::get('/delete-post/{post_id}', [
		'uses' => 'PostController@getDeletePost',
		'as' =>'post.delete',
		'middleware' => 'auth'
	]);

	Route::get('/logout',[
		'uses' => 'UserController@getLogout',
		'as' =>'logout'

	]);

	Route::get('te',function(){
		dd(Auth::user());
	});

	/*Route::post('/edit',function(\Illuminate\Http\Request $request){
		return response()->json(['message'=>$request['postId']]);
	})->name('edit');*/

	Route::post('/edit',[
		'uses' => 'PostController@postEditPost',
		'as' =>'edit'
	]);

	Route::get('/account', [
		'uses' => 'UserController@getAccount',
		'as' =>'account',
		'middleware' => 'auth'
	]);

	Route::post('/updateaccount', [
		'uses' => 'UserController@postSaveAccount',
		'as' =>'account.save'
	]);

	Route::get('/userimage/{filename}',[
		'uses' => 'UserController@getUserImage',
		'as' =>'account.image'
	]);

	Route::post('/like',[
		'uses' => 'PostController@postLikePost',
		'as' =>'like'
	]);
//});
