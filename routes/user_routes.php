<?php
	Route::get('/',function(){
		return view('user.page.trangchu');
	});
	Route::resource('tbCategory','CategoryControllerAPI');
?>