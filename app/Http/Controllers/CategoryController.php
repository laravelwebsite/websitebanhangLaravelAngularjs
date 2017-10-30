<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
   	public function postChecknamecategory(Request $request)
   	{
   		$cate=Category::where('name',$request->name)->get();
			if($cate->count()>0)
			{
				return 0;
			}
	    	else
	    	{
	    		return 1;
	    	}	
	   }
}
