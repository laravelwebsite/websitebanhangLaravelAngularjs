<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\HoaDonSanPham;
class HoaDon extends Model
{
    protected $table = 'hoa_dons';
    protected $fillable = [];

    public function hoadonsanpham()
    {
    	return $this->hasMany(HoaDonSanPham::class,'mahoadon','Mahoadon');
    }
}
