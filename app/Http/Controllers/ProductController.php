<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\SubCategory;
use App\DetailSubCategory;
use DB;

class ProductController extends Controller
{
	public function getTrangchu()
	{
		$dienthoai=Product::where('delete',1)->where('detail_sub_categories_id',1)->limit(3)->get();
		$macbook=Product::where('delete',1)->where('detail_sub_categories_id',10)->limit(3)->get();
		$trangphucnam=Product::where('delete',1)->where('detail_sub_categories_id',44)->limit(3)->get();
		$aokhoacnam=Product::where('delete',1)->where('detail_sub_categories_id',45)->limit(3)->get();
		$trangphucnu=Product::where('delete',1)->where('detail_sub_categories_id',56)->limit(3)->get();
		$aokhoacnu=Product::where('delete',1)->where('detail_sub_categories_id',57)->limit(3)->get();
		return view('user.page1.trangchu',['dienthoai'=>$dienthoai,'macbook'=>$macbook,'trangphucnam'=>$trangphucnam,'aokhoacnam'=>$aokhoacnam,'trangphucnu'=>$trangphucnu,'aokhoacnu'=>$aokhoacnu]);
	}
	public function getProduct($id)
	{
		$product=Product::findBySlug($id);
		$album = $product->album;
		$sp=explode('|',$album);

		$detail_sub_cate=$product->detailsubcategory;
		$product_lienquan=Product::where('delete',1)->where('detail_sub_categories_id',$detail_sub_cate->id)->limit(10)->get();
		return view('user.page1.detailproduct',['product'=>$product,'split'=>$sp,'productlienquan'=>$product_lienquan]);
	}
	public function postdeleteProduct(Request $request)
	{
		if($request->ajax())
		{
			$product=Product::whereIn('id',$request->val)->get();

			foreach($product as $pro)
			{
				if($pro->image!=null && file_exists("upload/product/".$pro->image))
				{
					unlink('upload/product/'.$pro->image);
				}
				$album=$pro->album;
				if($album !="")
				{
					$split=explode('|',$album);
					foreach($split as $key=>$value){
						if(file_exists("upload/product/".$value))
						{
							unlink('upload/product/'.$value);
						}		    	
					}
				}
				
				$pro->delete=0;
    				$pro->save();
			}
		}
	}
	public function getProductbyCate($slug)
	{
		$cate=Category::findBySlug($slug);
		$tbproduct=DB::table('categories')
		->where('categories.delete', 1)->where('sub_categories.delete', 1)
		->where('detail_sub_categories.delete', 1)->where('products.delete', 1)
		->join('sub_categories','categories.id','=','sub_categories.categories_id')
		->join('detail_sub_categories','sub_categories.id','=','detail_sub_categories.sub_categories_id')
		->join('products','detail_sub_categories.id','=','products.detail_sub_categories_id');
		$product=$tbproduct->where('categories_id',$cate->id)->paginate(10);
		
		return view('user.page1.productBy',['productcate'=>$product]);
		
	}
	public function getProductbySubcate($slug)
	{
		$sub=SubCategory::findBySlug($slug);
		$tbproduct=DB::table('categories')
		->where('categories.delete', 1)->where('sub_categories.delete', 1)
		->where('detail_sub_categories.delete', 1)->where('products.delete', 1)
		->join('sub_categories','categories.id','=','sub_categories.categories_id')
		->join('detail_sub_categories','sub_categories.id','=','detail_sub_categories.sub_categories_id')
		->join('products','detail_sub_categories.id','=','products.detail_sub_categories_id');
		
		$product=$tbproduct->where('sub_categories_id',$sub->id)->paginate(10);
		return view('user.page1.productBy',['productcate'=>$product]);
	}
	public function getProductbyDetailSubcate($slug)
	{
		$detail=DetailSubCategory::findBySlug($slug);
		$tbproduct=DB::table('categories')
		->where('categories.delete', 1)->where('sub_categories.delete', 1)
		->where('detail_sub_categories.delete', 1)->where('products.delete', 1)
		->join('sub_categories','categories.id','=','sub_categories.categories_id')
		->join('detail_sub_categories','sub_categories.id','=','detail_sub_categories.sub_categories_id')
		->join('products','detail_sub_categories.id','=','products.detail_sub_categories_id');
		$product=$tbproduct->where('detail_sub_categories_id',$detail->id)->paginate(10);
		return view('user.page1.productBy',['productcate'=>$product]);
	}
	public function productPerpage(Request $request)
	{
		if($request->ajax())
		{
			$productt=Product::orderBy('created_at','DESC')->paginate($request->soluong);
			return json_encode($productt);
		}
	}
	public function postAlbum($id,Request $request)
	{

		$product=Product::findBySlug($id);
		if($request->hasFile('file'))
		{
			$image=$request->file('file');
		            $name=$image->getClientOriginalName();//lay ra ten file
		            $duoi=$image->getClientOriginalExtension();//llay ra duoi file
		            if($duoi!= 'png' && $duoi != 'jpg' && $duoi != 'jpeg')
		            {
		            	return response('Định dạng đuôi file không đúng.Bạn chỉ được upload file có đuôi jpg,jpeg,png',400);
		            }
		            $hinh=str_random(10)."_".$name;//random  va noi dau _ de khong trung ten
		            while(file_exists("upload/product/".$hinh))//neu van trung thi random tiep
		            {
		            	$hinh=str_random(10)."_".$name;
		            }
		            $hinh=str_replace(" ","_",$hinh);
		            $image->move('upload/product',$hinh);//vi tri luu va ten file
		            
		            if($product->album==null)
		            {
		            	$product->album=$hinh;
		            }
		            else
		            {
		            	$product->album=$product->album."|".$hinh;
		            }
		            $product->save();    
		        }

		        return "Update album thành công!";
		    }
		    public function postdeleteAlbum($idd,$stop)
		    {
		    	$product=Product::findBySlug($idd);
		    	$album=$product->album;
		    	//dd($product);
		    	
		    	if($album != "")
		    	{
		    		$split=explode('|',$album);
		    		foreach($split as $key=>$value){
		    			if($value==$stop)
		    			{
			    			unset($split[$key]);//xoa phan tu trong mang
			    			if(file_exists("upload/product/".$stop))
			    			{
			    				unlink('upload/product/'.$stop);
			    			}
		    			}		    	
			    	}
			    	$album=implode('|',$split);
			    	$product->album=$album;
			    	$product->save();
		    	}

		}
	}
