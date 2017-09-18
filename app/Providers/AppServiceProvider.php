<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\View;
use App\User_Menu;
use App\User;
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
                    $menuuser=User_Menu::where('user_id',$iduser)->get();
                    $view->with('menuuser',$menuuser);
                }
                
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
