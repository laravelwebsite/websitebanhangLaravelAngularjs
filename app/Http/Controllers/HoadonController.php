<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HoaDon;
use App\HoaDonSanPham;
class HoadonController extends Controller
{
	public function postUpdateBill(Request $request)
	{

		$hoadonsanpham=HoaDonSanPham::where('mahoadon',$request->Mahoadon)->where('product_id',$request->idProduct)->first();
		if($hoadonsanpham)
		{
			$hoadonsanpham->qty=$request->qty;
			$hoadonsanpham->subtotal=(int)$hoadonsanpham->qty*(int)$hoadonsanpham->price;
			if($hoadonsanpham->save())
			{
				$total=0;
				$hoadonsanpham=HoaDonSanPham::where('mahoadon',$request->Mahoadon)->get();
				foreach($hoadonsanpham as $hdsp)
				{
					$total+=$hdsp->subtotal;
				}
				$hoadon=HoaDon::where('Mahoadon',$request->Mahoadon)->first();
				$hoadon->price=$total;
				$hoadon->save();
			}
			$hoadon=HoaDon::where('Mahoadon',$request->Mahoadon)->first();

			return json_encode($hoadon);
		}
		else
		{
			return 0;
		}

    	//$hoadon=HoaDon::where('Mahoadon',$request->Mahoadon)->first();

	}
	public function postdeleteHoadon(Request $request)
	{
		if($request->ajax())
		{
			$hoadon=HoaDon::whereIn('id',$request->val)->get();
			foreach($hoadon as $hd)
			{
				$hoadonsanpham=HoaDonSanPham::where('mahoadon',$hd->Mahoadon)->get();
				if($hd->delete())
				{
					foreach($hoadonsanpham as $hd_sp)
					{
						$hd_sp->delete();
					}
				}
			}
		}
	}
}
