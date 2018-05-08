<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use App\DetailSubCategory;
use App\Product;
class CategoryControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::where('delete',1)->orderBy('created_at','DESC')->get();
        foreach($categories as $cate)
        {
            foreach($cate->subcategory as $sub)
            {
                foreach($sub->detailsubcategory as $detail)  
                {
                    
                }
            }
        }
        //$categories->subcategory;
        return json_encode($categories);
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
        $find=Category::where('name',$request->name)->first();
        if($find)
        {
            $find->delete=1;
            $find->save();
        }
        else
        {
            $category=new Category;
            $category->name=$request->name;
            $category->delete=1;
            $category->save();
        }
        
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
        $category=Category::findBySlug($id);
        return json_encode($category);
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
        $category=Category::findBySlug($id);
        $category->name=$request->name;
        $category->slug=null;
        $category->save();
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
        $category=Category::find($id);
        $category->delete=0;
        if($category->save())
        {
            $subcate=SubCategory::where('categories_id',$id)->get();
            if($subcate->count()>0)
            {
                foreach($subcate as $sub)
                {
                    $sub->delete=0;
                    if($sub->save())
                    {
                        $detail=DetailSubCategory::where('sub_categories_id',$sub->id)->get();
                        if($detail->count()>0)
                        {
                            foreach($detail as $de)
                            {
                                $de->delete=0;
                                if($de->save())
                                {
                                    $product=Product::where('detail_sub_categories_id',$de->id)->get();
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
            }
        }
    }
}
