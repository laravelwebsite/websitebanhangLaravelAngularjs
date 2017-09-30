<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SubCategory;
use App\Product;
class DetailSubCategory extends Model
{
    protected $table='detail_sub_categories';
    protected $fillable=[];

    public function subcategory()
    {
    	return $this->belongsTo(SubCategory::class,'sub_categories_id','id');
    }

    public function product()
    {
    	return $this->hasMany(Product::class,'detail_sub_categories_id','id');
    }
}
