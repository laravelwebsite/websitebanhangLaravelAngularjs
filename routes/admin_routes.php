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
	Route::group(['prefix'=>'category','middleware'=>'admin'],function(){
		Route::get('/',function(){
			return view('admin.page.category.list');
		});
		Route::resource('tbCategory','CategoryControllerAPI');
		Route::post('checknamecategory','CategoryController@postChecknamecategory');
	});
	Route::group(['prefix'=>'subcategory','middleware'=>'admin'],function(){
		Route::get('/',function(){
			return view('admin.page.subcategory.list');
		});
		Route::resource('tbSubcategory','SubcategoryControllerAPI');
		Route::post('checknamesubcategory','SubcategoryController@postChecknamesubcategory');
		Route::get('getSubByCate/{idCate}','SubcategoryController@getSubByCate');
	});
	Route::group(['prefix'=>'detailsubcategory','middleware'=>'admin'],function(){
		Route::get('/',function(){
			return view('admin.page.detailsubcategory.list');
		});
		Route::resource('tbDetailSubcategory','DetailSubcategoryControllerAPI');
		Route::post('checknamedetailsubcategory','DetailSubcategoryController@postChecknamedetailsubcategory');
		Route::get('getDeSubBySub/{idSubCate}','DetailSubcategoryController@getDeSubBySub');
	});
	Route::group(['prefix'=>'product','middleware'=>'admin'],function(){
		Route::get('/',function(){
			return view('admin.page.product.list');
		});
		Route::resource('tbProduct','ProductControllerAPI');
		Route::post('checknamedetailsubcategory','ProductController@postChecknamedetailsubcategory');
		Route::post('album/{id}','ProductController@postAlbum');
		Route::post('deleteAlbum/{idd}/{stop}','ProductController@postdeleteAlbum');
		Route::get('search-product-cate/{slug}','ProductController@getProductbyCate');
		Route::get('search-product-subcate/{slug}','ProductController@getProductbySubcate');
		Route::get('search-product-detailcate/{slug}','ProductController@getProductbyDetailSubcate');
	});
});