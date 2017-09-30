<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\DetailSubCategory;
class SubCategory extends Model
{
    protected $table='sub_categories';
    protected $fillable = [];

    public function category()
    {
    	return $this->belongsTo(Category::class,'categories_id','id');
    }
    public function detailsubcategory()
    {
    	return $this->hasMany(DetailSubCategory::class,'sub_categories_id','id');
    }
}
