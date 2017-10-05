<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubCategory;
use App\DetailSubCategory;
use App\Product;
class SubcategoryControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub=SubCategory::orderBy('created_at','DESC')->get();
        foreach($sub as $s)
        {
            $s->category;
        }
        return json_encode($sub);
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
        $sub=new SubCategory;
        $sub->name=$request->name;
        $sub->categories_id=$request->categories_id;
        $sub->save();
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
        $sub=SubCategory::findBySlug($id);
        $sub->category;
        return json_encode($sub);
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
        $sub=SubCategory::findBySlug($id);
        $sub->name=$request->name;
        $sub->categories_id=$request->categories_id;
        $sub->slug=null;
        $sub->save();
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
        $sub=SubCategory::find($id);
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
