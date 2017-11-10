<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HoaDon;
use App\Product;
use App\HoaDonSanPham;
class HoadonControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $hoadons=HoaDon::orderBy('created_at','DESC')->get();
        return json_encode($hoadons);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hoadon=HoaDon::find($id);
        foreach($hoadon->hoadonsanpham as $hd_sp)
        {
            $hd_sp->product;
        }
        return json_encode($hoadon);
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
        $hoadon=HoaDon::find($id);
        $hoadon->email=$request->email;
        $hoadon->phone=$request->phone;
        $hoadon->address=$request->address;
        $hoadon->save();
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
        $hoadon=HoaDon::find($id);
        if($hoadon->delete())
        {
            $hd_sp=HoaDonSanPham::where('mahoadon',$hoadon->Mahoadon)->get();
            if($hd_sp->count()>0)
            {
                foreach($hd_sp as $hd)
                {
                    $hd->delete();
                }
            }
            return "Xóa thành công";
        }

    }
}
