<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SubCategory;
class Category extends Model
{
    protected $table='categories';
    protected $fillable = [];
    public function subcategory()
    {
    	return $this->hasMany(SubCategory::class,'categories_id','id');
    }
}
