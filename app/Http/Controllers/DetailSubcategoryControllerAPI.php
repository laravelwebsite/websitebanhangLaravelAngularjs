<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DetailSubCategory;
use App\SubCategory;
use App\Product;
class DetailSubcategoryControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail=DetailSubCategory::orderBy('created_at','DESC')->get();
        foreach($detail as $d)
        {
            $d->subcategory;
        }
        return json_encode($detail);
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
        $detail=new DetailSubCategory;
        $detail->name=$request->name;
        $detail->sub_categories_id=$request->sub_categories_id;
        $detail->save();
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
        $detail=DetailSubCategory::findBySlug($id);
        
        $detail->subcategory->category;
        $detail->subcategory;
        return json_encode($detail);
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
        $detail=DetailSubCategory::findBySlug($id);
        $detail->name=$request->name;
        $detail->sub_categories_id=$request->sub_categories_id;
        $detail->slug=null;
        $detail->save();
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
        $detail=DetailSubCategory::find($id);
        if($detail->delete())
        {
            $product=Product::where('detail_sub_categories_id',$detail->id)->get();
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
