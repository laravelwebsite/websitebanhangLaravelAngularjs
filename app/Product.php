<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DetailSubCategory;
use App\User;
class Product extends Model
{
    protected $table='products';
    protected $fillale=[];

    public function detailsubcategory()
    {
    	return $this->belongsTo(DetailSubCategory::class,'detail_sub_categories_id','id');
    }
    public function user()
    {
    	return $this->belongsTo(User::class,'user_id','id');
    }
}
