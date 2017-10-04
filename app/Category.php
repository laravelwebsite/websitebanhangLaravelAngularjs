<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SubCategory;
use App\DetailSubCategory;
use App\Product;
class Category extends Model
{
    protected $table='categories';
    protected $fillable = [];
    public function subcategory()
    {
    	return $this->hasMany(SubCategory::class,'categories_id','id');
    }
    public function detail()
    {
    	return $this->hasManyThrough(DetailSubCategory::class,SubCategory::class,'categories_id','sub_categories_id','id');
    }
}
