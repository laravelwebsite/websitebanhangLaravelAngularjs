<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
class MenuController extends Controller
{
    public function postChecknamemenu(Request $request)
    {
    	$menu=Menu::where('name',$request->name)->get();
    	if($menu->count()>0)
    	{
    		return 0;
    	}
    	else
    	{
    		return 1;
    	}
    }
    public function postChecksrcmenu(Request $request)
    {
    	$menu=Menu::where('src',$request->src)->get();
    	if($menu->count()>0)
    	{
    		return 0;
    	}
    	else
    	{
    		return 1;
    	}
    }
}
