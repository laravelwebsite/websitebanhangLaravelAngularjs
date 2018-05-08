<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\View;
use App\User_Menu;
use App\User;
use App\Category;
use App\Product;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */

    public function boot()
    {
        View::composer('*',function($view){
                if(Auth::check())
                {
                    $iduser=Auth::user()->id;
                    $menuuser=User_Menu::where('delete',1)->where('user_id',$iduser)->get();
                    $view->with('menuuser',$menuuser);
                }
                
            });
        View::composer('*',function($view){
                $cate=Category::where('delete',1)->limit(7)->get();
                $product=Product::where('delete',1)->paginate(15);
                $allcate=Category::where('delete',1)->get();
                $view->with('cate',$cate);
                $view->with('allCate',$allcate);
                $view->with('productt',$product);
            });
    }
    
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
