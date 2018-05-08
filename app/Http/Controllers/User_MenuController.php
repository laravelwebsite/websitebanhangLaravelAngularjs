<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_Menu;
class User_MenuController extends Controller
{
    public function postdeleteUsermenu(Request $request)
	{
		if($request->ajax())
		{
			$usermenu=User_Menu::whereIn('id',$request->val)->get();
			foreach($usermenu as $um)
			{
				$um->delete=0;
				$um->save();
			}
		}
	}
}
