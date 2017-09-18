<?php 
Route::group(['prefix'=>'admin'],function(){
	Route::get('login-admin','UserController@getLogin');
	Route::post('login-admin','UserController@postLogin');
	Route::get('logout-admin','UserController@getLogout');
	
	Route::group(['prefix'=>'user','middleware'=>'admin'],function(){
		Route::get('/',function(){
			return view('admin.page.user.list');
		});
		Route::post('list','UserController@postList');
		Route::post('getRolename','RoleController@getRolename');
		Route::post('add','UserController@postAdd');

		Route::get('edit/{id}','UserController@getEdit');
		Route::post('edit/{id}','UserController@postEdit');

		Route::get('delete/{id}','UserController@getDelete');

		Route::post('checkemail','UserController@postCheckemail');
		
	});
});