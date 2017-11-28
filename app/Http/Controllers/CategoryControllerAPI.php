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
        $categories=Category::orderBy('created_at','DESC')->get();
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
        $category=new Category;
        $category->name=$request->name;
        $category->save();
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
        if($category->delete())
        {
            $subcate=SubCategory::where('categories_id',$id)->get();
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
