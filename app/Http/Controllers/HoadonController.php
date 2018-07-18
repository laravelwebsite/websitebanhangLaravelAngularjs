<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HoaDon;
use View;
use App\HoaDonSanPham;
use Carbon\Carbon;
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
				$hd->delete=0;

				if($hd->save())
				{
					foreach($hoadonsanpham as $hd_sp)
					{
						$hd_sp->delete=0;
						$hd_sp->save();
					}
				}
			}
		}
	}
	public function chitiethoadon(Request $request)
	{
		$mahoadon=$request->id;
		$hoadon=HoaDon::where('Mahoadon',$mahoadon)->first();
		$sanphamhoadon=HoaDonSanPham::where('mahoadon',$mahoadon)->get();
		return view('admin.page.thongke.chitiethoadon',['hoadon'=>$hoadon,'sanphamhoadon'=>$sanphamhoadon]);
	}
	public function postXemthuchi(Request $request)
	{
		if($request->ajax())
		{
			$year=$request->year;
			$month=$request->month;
			$date=$request->date;
			if($request->date)
			{
				$hoadon=HoaDon::whereYear('updated_at', '=', $year)
				->whereMonth('created_at', '=', $month)
				->whereDay('created_at', '=', $date)->where("status",3)->get();
			}
			else
			{
				if($request->month)
				{
					$hoadon=HoaDon::whereYear('updated_at', '=', $year)
					->whereMonth('created_at', '=', $month)->where("status",3)->get();
				}
				else
				{
					$hoadon=HoaDon::whereYear('updated_at', '=', $year)->where("status",3)->get();
				}
			}
			$tongtien=0;
			foreach($hoadon as $hd)
			{
				$tien=(int)$hd->price;
				$tongtien=$tongtien+$tien;
			}
			return View::make('admin.page.thongke.hoadonsearch',['hoadonsearch'=>$hoadon,'tongtien'=>$tongtien]);
		}
	}
	
}
