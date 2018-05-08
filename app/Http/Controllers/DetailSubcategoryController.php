<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DetailSubCategory;
use App\SubCategory;
use App\Product;
class DetailSubcategoryController extends Controller
{
	public function postChecknamedetailsubcategory(Request $request)
	{
		$de=DetailSubCategory::where('delete',1)->where('name',$request->name)->get();
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

	public function postdeleteDetailsubcategory(Request $request)
	{
		if($request->ajax())
		{
			$detail=DetailSubCategory::whereIn('id',$request->val)->get();
			foreach($detail as $dt)
			{
				$dt->delete=0;
				if($dt->save())
				{
					$product=Product::where('detail_sub_categories_id',$dt->id)->get();
					if($product->count()>0)
					{
						foreach($product as $pro)
						{
							$pro->delete=0;
							$pro->save();
						}
					}
				}
			}
		}
	}
}
