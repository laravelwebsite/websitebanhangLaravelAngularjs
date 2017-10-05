<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SubCategory;
use App\DetailSubCategory;
use App\Product;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
class Category extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;
    protected $table='categories';
    protected $fillable = [];
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
    	return $this->hasMany(SubCategory::class,'categories_id','id');
    }
    public function detail()
    {
    	return $this->hasManyThrough(DetailSubCategory::class,SubCategory::class,'categories_id','sub_categories_id','id');
    }
}
