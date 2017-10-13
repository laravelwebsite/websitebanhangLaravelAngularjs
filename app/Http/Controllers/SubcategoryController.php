<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubCategory;
class SubcategoryController extends Controller
{
	public function postChecknamesubcategory(Request $request)
	{
		$sub=SubCategory::where('name',$request->name)->get();
		if($sub->count()>0)
		{
			return 0;
		}
		else
		{
			return 1;
		}
	}

	public function getSubByCate($idCate)
	{
		$de=SubCategory::where('categories_id',$idCate)->get();
		return json_encode($de);
	}
}
