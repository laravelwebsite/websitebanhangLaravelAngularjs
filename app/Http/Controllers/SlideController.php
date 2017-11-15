<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SlideController extends Controller
{
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
