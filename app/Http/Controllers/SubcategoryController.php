<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubCategory;
use App\DetailSubCategory;
use App\Product;
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
	public function postdeleteSubcategory(Request $request)
	{
		if($request->ajax())
		{
			$sub=SubCategory::whereIn('id',$request->val)->get();
			foreach($sub as $s)
			{
				if($s->delete())
				{
					$detail=DetailSubCategory::where('sub_categories_id',$s->id)->get();
					if($detail->count()>0)
					{
						foreach($detail as $de)
						{
							if($de->delete())
							{
								$product=Product::where('detail_sub_categories_id',$de->id)->get();
								if($product->count()>0)
								{
									foreach($product as $pro)
									{
										$pro->delete();
									}
								}
							}
						}
					}
				}
			}
		}
	}
}
