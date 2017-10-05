<?php
	Route::get('/',function(){
		return view('user.page.trangchu');
	});
	
	Route::get('san-pham/{slug}','ProductController@getProduct');
	
	Route::resource('tbCategory','CategoryControllerAPI');
	Route::resource('tbProduct','ProductControllerAPI');
	
?>