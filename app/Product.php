<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DetailSubCategory;
use App\User;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
class Product extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;
    protected $table='products';
    protected $fillale=[];
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function detailsubcategory()
    {
    	return $this->belongsTo(DetailSubCategory::class,'detail_sub_categories_id','id');
    }
    public function user()
    {
    	return $this->belongsTo(User::class,'user_id','id');
    }
}
