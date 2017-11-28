<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use App\DetailSubCategory;
use App\Product;
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

	public function postdeleteCategory(Request $request)
	{
		if($request->ajax())
		{
			$cate=Category::whereIn('id',$request->val)->get();
			foreach($cate as $c)
			{
				if($c->delete())
				{
					$subcate=SubCategory::where('categories_id',$c->id)->get();
					if($subcate->count()>0)
					{
						foreach($subcate as $sub)
						{
							if($sub->delete())
							{
								$detail=DetailSubCategory::where('sub_categories_id',$sub->id)->get();
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
		}
	}
}
