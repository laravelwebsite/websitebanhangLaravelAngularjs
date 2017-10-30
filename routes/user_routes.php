<?php
Route::get('/',function(){
	return view('user.page.trangchu');
});
Route::get('search-product-cate/{slug}','ProductController@getProductbyCate');
Route::get('search-product-subcate/{slug}','ProductController@getProductbySubcate');
Route::get('search-product-detailcate/{slug}','ProductController@getProductbyDetailSubcate');
Route::get('san-pham/{slug}','ProductController@getProduct');
Route::post('productPerpage','ProductController@productPerpage');
Route::resource('tbCategory','CategoryControllerAPI');
Route::resource('tbProduct','ProductControllerAPI');

Route::get('lien-he','PageController@getLienhe');
Route::post('lien-he','PageController@postLienhe');

Route::get('dang-ky-tai-khoan','UserController@getRegister');
Route::post('dang-ky-tai-khoan','UserController@postRegister');

Route::get('dang-nhap','UserController@getLoginUser');
Route::post('dang-nhap','UserController@postLoginUser');

Route::get('gio-hang','PageController@getGiohang');
Route::get('them-gio-hang/{slug}','PageController@getAddproduct');
Route::post('sua-gio-hang','PageController@postSuagiohang');
Route::get('xoa-gio-hang/{id}','PageController@getXoagiohang');
Route::post('hoa-don','PageController@getHoaDon');

Route::get('tim-san-pham','PageController@getSearch');
Route::post('tim-kiem-product','PageController@getProductSearch');
Route::post('loc-san-pham','PageController@getLocproduct');

Route::group(['prefix'=>'user','middleware'=>'user'],function(){
	Route::get('log-out','UserController@getLogoutUser');
});
?>