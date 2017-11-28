<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SubCategory;
use App\Product;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
class DetailSubCategory extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;
    protected $table='detail_sub_categories';
    protected $fillable=[];
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
    public function subcategory()
    {
    	return $this->belongsTo(SubCategory::class,'sub_categories_id','id');
    }

    public function product()
    {
    	return $this->hasMany(Product::class,'detail_sub_categories_id','id');
    }
}
