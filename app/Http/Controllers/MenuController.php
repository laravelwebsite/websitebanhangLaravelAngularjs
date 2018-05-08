<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\User_Menu;
class MenuController extends Controller
{
    public function postChecknamemenu(Request $request)
    {
    	$menu=Menu::where('delete',1)->where('name',$request->name)->get();
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
    	$menu=Menu::where('delete',1)->where('src',$request->src)->get();
    	if($menu->count()>0)
    	{
    		return 0;
    	}
    	else
    	{
    		return 1;
    	}
    }

    public function postdeleteMenu(Request $request)
    {
        if($request->ajax())
        {
            $menu=Menu::whereIn('id',$request->val)->get();
            foreach($menu as $mn)
            {
                $usermenu=User_Menu::where('menu_id',$mn->id)->get();
                $mn->delete=0;
                if($mn->save())
                {
                    foreach($usermenu as $u)
                    {
                        $u->delete=0;
                        $u->save();
                    }
                }
            }
        }
    }
}
