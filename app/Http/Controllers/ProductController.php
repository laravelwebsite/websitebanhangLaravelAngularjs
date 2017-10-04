<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    public function getProduct($id)
    {
    	$product=Product::find($id);
    	return view('user.page.chitiet',['product'=>$product]);
    }
}
