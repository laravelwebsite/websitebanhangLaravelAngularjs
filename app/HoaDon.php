<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\HoaDonSanPham;
use App\Product;
class HoaDon extends Model
{
    protected $table = 'hoa_dons';
    protected $fillable = [];

    public function hoadonsanpham()
    {
    	return $this->hasMany(HoaDonSanPham::class,'mahoadon','Mahoadon');
    }

}
