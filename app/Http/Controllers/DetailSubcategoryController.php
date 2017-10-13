<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DetailSubCategory;
use App\SubCategory;
class DetailSubcategoryController extends Controller
{
	public function postChecknamedetailsubcategory(Request $request)
	{
		$de=DetailSubCategory::where('name',$request->name)->get();
		if($de->count()>0)
		{
			return 0;
		}
		else
		{
			return 1;
		}	
	}

	public function getDeSubBySub($idSubCate)
	{
		$de=DetailSubCategory::where('sub_categories_id',$idSubCate)->get();
		return json_encode($de);
	}
}
