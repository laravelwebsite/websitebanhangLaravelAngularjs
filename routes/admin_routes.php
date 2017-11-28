<?php 
use Illuminate\Support\Facades\Auth;
use App\User_Menu;
use App\Menu;
use App\HoaDon;
Route::group(['prefix'=>'admin'],function(){
	Route::get('login-admin','UserController@getLogin');
	Route::post('login-admin','UserController@postLogin');
	Route::get('logout-admin','UserController@getLogout');
	
	
	Route::group(['prefix'=>'user','middleware'=>'admin'],function(){
		$user="";
		
		Route::get('/',function(){
			if(Auth::user())
			{
				$user=Auth::user()->id;
			}

			$menu=Menu::where('src','user')->first();
			$menu_id=$menu->id;
			$user_menu=User_Menu::where('user_id',$user)->where('menu_id',$menu_id)->get();
			if($user_menu->count()>0)
			{
				return view('admin.page.user.list');
			}
			else
			{
				return view('alertError');
			}
		});
		Route::resource('tbUser','UserControllerAPI');
		Route::resource('tbRole','RoleControllerAPI');
		Route::post('checkemail','UserController@postCheckemail');
		Route::post('delete-multi-user','UserController@postdeleteUser');


	});

	Route::group(['prefix'=>'menu','middleware'=>'admin'],function(){
		//$user=Auth::user()->id;
		$user="";
		
		Route::get('/',function(){

			if(Auth::check())
			{
				$user=Auth::user()->id;
			}
			$menu=Menu::where('src','menu')->first();
			$menu_id=$menu->id;
			$user_menu=User_Menu::where('user_id',$user)->where('menu_id',$menu_id)->get();
			if($user_menu->count()>0)
			{
				return view('admin.page.menu.list');
			}
			else
			{
				
				return view('alertError');
			}
		});
		Route::resource('tbMenu','MenuControllerAPI');
		Route::post('checknamemenu','MenuController@postChecknamemenu');
		Route::post('checksrcmenu','MenuController@postChecksrcmenu');
		Route::post('delete-multi-menu','MenuController@postdeleteMenu');
		
	});

	Route::group(['prefix'=>'role','middleware'=>'admin'],function(){
		//$user=Auth::user()->id;
		$user="";
		
		Route::get('/',function(){
			if(Auth::check())
			{
				$user=Auth::user()->id;
			}
			$menu=Menu::where('src','role')->first();
			$menu_id=$menu->id;
			$user_menu=User_Menu::where('user_id',$user)->where('menu_id',$menu_id)->get();
			if($user_menu->count()>0)
			{
				return view('admin.page.role.list');
			}
			else
			{
				
				return view('alertError');
			}
		});
		Route::resource('tbRole','RoleControllerAPI');
		Route::post('checknamerole','RoleController@postChecknamerole');
		Route::post('delete-multi-role','RoleController@postdeleteRole');
		
	});
	Route::group(['prefix'=>'UserMenu','middleware'=>'admin'],function(){
		//$user=Auth::user()->id;
		$user="";
		
		Route::get('/',function(){
			if(Auth::check())
			{
				$user=Auth::user()->id;
			}
			$menu=Menu::where('src','UserMenu')->first();
			$menu_id=$menu->id;
			$user_menu=User_Menu::where('user_id',$user)->where('menu_id',$menu_id)->get();
			if($user_menu->count()>0)
			{
				return view('admin.page.usermenu.list');
			}
			else
			{
				
				return view('alertError');
			}
		});
		Route::get('get-User-admin','UserController@getUser');
		Route::resource('tbUserMenu','User_MenuControllerAPI');
		Route::post('checknamerole','RoleController@postChecknamerole');
		Route::post('delete-multi-usermenu','User_MenuController@postdeleteUsermenu');
		
	});
	Route::group(['prefix'=>'category','middleware'=>'admin'],function(){
		//$user=Auth::user()->id;
		$user="";
		
		Route::get('/',function(){
			if(Auth::check())
			{
				$user=Auth::user()->id;
			}
			$menu=Menu::where('src','category')->first();
			$menu_id=$menu->id;
			$user_menu=User_Menu::where('user_id',$user)->where('menu_id',$menu_id)->get();
			if($user_menu->count()>0)
			{
				return view('admin.page.category.list');
			}
			else
			{
				
				return view('alertError');
			}
		});
		Route::resource('tbCategory','CategoryControllerAPI');
		Route::post('checknamecategory','CategoryController@postChecknamecategory');
		Route::post('delete-multi-category','CategoryController@postdeleteCategory');
		
	});
	Route::group(['prefix'=>'subcategory','middleware'=>'admin'],function(){
		//$user=Auth::user()->id;
		$user="";
		
		Route::get('/',function(){
			if(Auth::check())
			{
				$user=Auth::user()->id;
			}
			$menu=Menu::where('src','subcategory')->first();
			$menu_id=$menu->id;
			$user_menu=User_Menu::where('user_id',$user)->where('menu_id',$menu_id)->get();
			if($user_menu->count()>0)
			{
				return view('admin.page.subcategory.list');
			}
			else
			{
				
				return view('alertError');
			}
		});
		Route::resource('tbSubcategory','SubcategoryControllerAPI');
		Route::post('checknamesubcategory','SubcategoryController@postChecknamesubcategory');
		Route::get('getSubByCate/{idCate}','SubcategoryController@getSubByCate');
		Route::post('delete-multi-subcategory','SubcategoryController@postdeleteSubcategory');
	});
	Route::group(['prefix'=>'detailsubcategory','middleware'=>'admin'],function(){
		//$user=Auth::user()->id;
		$user="";
		
		Route::get('/',function(){
			if(Auth::check())
			{
				$user=Auth::user()->id;
			}
			$menu=Menu::where('src','detailsubcategory')->first();
			$menu_id=$menu->id;
			$user_menu=User_Menu::where('user_id',$user)->where('menu_id',$menu_id)->get();
			if($user_menu->count()>0)
			{
				return view('admin.page.detailsubcategory.list');
			}
			else
			{
				
				return view('alertError');
			}
		});
		Route::resource('tbDetailSubcategory','DetailSubcategoryControllerAPI');
		Route::post('checknamedetailsubcategory','DetailSubcategoryController@postChecknamedetailsubcategory');
		Route::get('getDeSubBySub/{idSubCate}','DetailSubcategoryController@getDeSubBySub');
		Route::post('delete-multi-detailsubcategory','DetailSubcategoryController@postdeleteDetailsubcategory');
	});
	Route::group(['prefix'=>'product','middleware'=>'admin'],function(){
		//$user=Auth::user()->id;
		$user="";
		
		Route::get('/',function(){
			if(Auth::check())
			{
				$user=Auth::user()->id;
			}
			$menu=Menu::where('src','product')->first();
			$menu_id=$menu->id;
			$user_menu=User_Menu::where('user_id',$user)->where('menu_id',$menu_id)->get();
			if($user_menu->count()>0)
			{
				return view('admin.page.product.list');
			}
			else
			{
				
				return view('alertError');
			}
		});
		Route::resource('tbProduct','ProductControllerAPI');
		Route::post('checknamedetailsubcategory','ProductController@postChecknamedetailsubcategory');
		Route::post('album/{id}','ProductController@postAlbum');
		Route::post('deleteAlbum/{idd}/{stop}','ProductController@postdeleteAlbum');
		Route::post('delete-multi-product','ProductController@postdeleteProduct');
	});

	Route::group(['prefix'=>'hoadon','middleware'=>'admin'],function(){
		//$user=Auth::user()->id;
		$user="";
		
		Route::get('/',function(){
			if(Auth::check())
			{
				$user=Auth::user()->id;
			}
			$menu=Menu::where('src','hoadon')->first();
			$menu_id=$menu->id;
			$user_menu=User_Menu::where('user_id',$user)->where('menu_id',$menu_id)->get();
			if($user_menu->count()>0)
			{

				return view('admin.page.hoadon.list');
			}
			else
			{
				
				return view('alertError');
			}
		});
		Route::resource('tbHoadon','HoadonControllerAPI');
		Route::post('update-bill','HoadonController@postUpdateBill');
		Route::post('delete-hoadon','HoadonController@postdeleteHoadon');

	});
	Route::group(['prefix'=>'thongke','middleware'=>'admin'],function(){
		//$user=Auth::user()->id;
		$user="";
		
		Route::get('/',function(){
			if(Auth::check())
			{
				$user=Auth::user()->id;
			}
			$menu=Menu::where('src','thongke')->first();
			$menu_id=$menu->id;
			$user_menu=User_Menu::where('user_id',$user)->where('menu_id',$menu_id)->get();
			if($user_menu->count()>0)
			{
				return view('admin.page.thongke.list');
			}
			else
			{
				
				return view('alertError');
			}
		});
		Route::post('xem-thu-chi','HoadonController@postXemthuchi');

	});
	Route::group(['prefix'=>'truycap','middleware'=>'admin'],function(){
		//$user=Auth::user()->id;
		$user="";
		
		Route::get('/',function(){
			if(Auth::check())
			{
				$user=Auth::user()->id;
			}
			$menu=Menu::where('src','truycap')->first();
			$menu_id=$menu->id;
			$user_menu=User_Menu::where('user_id',$user)->where('menu_id',$menu_id)->get();
			if($user_menu->count()>0)
			{
				return view('admin.page.truycap.list');
			}
			else
			{
				
				return view('alertError');
			}
		});
	});
});