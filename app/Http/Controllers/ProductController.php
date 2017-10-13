<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
	public function getProduct($id)
	{
		$product=Product::findBySlug($id);
		return view('user.page.chitiet',['product'=>$product]);
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
		            	response('Định dạng đuôi file không đúng.Bạn chỉ được upload file có đuôi jpg,jpeg,png',400);
		            }
		            $hinh=str_random(10)."_".$name;//random  va noi dau _ de khong trung ten
		            while(file_exists("upload/product/".$hinh))//neu van trung thi random tiep
		            {
		            	$hinh=str_random(10)."_".$name;
		            }
		            $image->move('upload/product',$hinh);//vi tri luu va ten file

		            if($product->album=='')
		            {
		            	$product->album=$hinh;
		            }
		            else
		            {
		            	$product->album=$product->album.'|'.$hinh;
		            }    
		        }
		        $product->save();
		        return "Update album thành công!";
		    }
		    public function postdeleteAlbum($idd,$stop)
		    {
		    	$product=Product::find($idd);
		    	$album=$product->album;
		    	$split=explode('|',$album);
		    	foreach($split as $key=>$value){
		    		if($value==$stop)
		    		{
		    			unset($split[$key]);
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
