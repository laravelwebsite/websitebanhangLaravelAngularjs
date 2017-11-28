<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Auth;
class ProductControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=Product::orderBy('created_at','DESC')->get();
        foreach($product as $pro)
        {
            $pro->detailsubcategory;
            $pro->user;
        }
        return json_encode($product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $product=new Product;
        $product->name=$request->name;
        $product->detail_sub_categories_id=$request->detail_sub_categories_id;
        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->key=$request->key;
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
         $hinh=str_replace(" ","_",$hinh);
            $image->move('upload/product',$hinh);//vi tri luu va ten file
            $product->image=$hinh;
        }
        else
        {
            $product->image="";
        }
        $product->album="";
        $product->status="Khuyến mãi";
        $product->active=1;
        $product->user_id=Auth::user()->id;
        $product->save();
        return "Thêm thành công";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=Product::findBySlug($id);
        $product->detailsubcategory->subcategory->category;
        return json_encode($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->file('file2'));
        $product=Product::findBySlug($id);
        $product->name=$request->name;
        $product->detail_sub_categories_id=$request->detail_sub_categories_id;
        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->key=$request->key;
        $product->slug=null;

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
            if($product->image!=null && file_exists("upload/product/".$product->image))
            {
                unlink('upload/product/'.$product->image);
            }
            $product->image=$hinh;
        }
        $product->status="Khuyến mãi";
        $product->active=1;
        $product->user_id=Auth::user()->id;
        $product->save();
        return "Sửa thành công";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::find($id);
        if($product->image!=null && file_exists("upload/product/".$product->image))
        {
            unlink('upload/product/'.$product->image);
        }
        $album=$product->album;
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
    
    $product->delete();
    return "Xóa thành công";
}
}
