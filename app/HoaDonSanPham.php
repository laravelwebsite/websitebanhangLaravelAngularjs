<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
class HoaDonSanPham extends Model
{
    protected $table = 'hoa_don_san_phams';
    protected $fillable = [];

    public function product()
    {
    	$this->belongsTo(Product::class,'product_id','id');
    }
}
