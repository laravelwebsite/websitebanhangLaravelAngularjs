<?php 
Route::group(['prefix'=>'admin'],function(){
	Route::get('login-admin','UserController@getLogin');
	Route::post('login-admin','UserController@postLogin');
	Route::get('logout-admin','UserController@getLogout');
	
	Route::group(['prefix'=>'user','middleware'=>'admin'],function(){
		Route::get('/',function(){
			return view('admin.page.user.list');
		});
		Route::resource('tbUser','UserControllerAPI');
		Route::resource('tbRole','RoleControllerAPI');
		Route::post('checkemail','UserController@postCheckemail');
		
	});

	Route::group(['prefix'=>'menu','middleware'=>'admin'],function(){
		Route::get('/',function(){
			return view('admin.page.menu.list');
		});
		Route::resource('tbMenu','MenuControllerAPI');
		Route::post('checknamemenu','MenuController@postChecknamemenu');
		Route::post('checksrcmenu','MenuController@postChecksrcmenu');
	});

	Route::group(['prefix'=>'role','middleware'=>'admin'],function(){
		Route::get('/',function(){
			return view('admin.page.role.list');
		});
		Route::resource('tbRole','RoleControllerAPI');
		Route::post('checknamerole','RoleController@postChecknamerole');
	});
	Route::group(['prefix'=>'UserMenu','middleware'=>'admin'],function(){
		Route::get('/',function(){
			return view('admin.page.usermenu.list');
		});
		Route::get('get-User-admin','UserController@getUser');
		Route::resource('tbUserMenu','User_MenuControllerAPI');
		Route::post('checknamerole','RoleController@postChecknamerole');
	});
});