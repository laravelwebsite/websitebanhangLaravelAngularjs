<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\HoaDon;
class HoaDonSanPham extends Model
{
    protected $table = 'hoa_don_san_phams';
    protected $fillable = [];

    public function product()
    {
    	return $this->belongsTo(Product::class,'product_id','id');
    }
    public function hoadon()
    {
    	return $this->belongsTo(HoaDon::class,'mahoadon','Mahoadon');
    }
}
