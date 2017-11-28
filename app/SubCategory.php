<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\DetailSubCategory;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
class SubCategory extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;
    protected $table='sub_categories';
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
    public function category()
    {
    	return $this->belongsTo(Category::class,'categories_id','id');
    }
    public function detailsubcategory()
    {
    	return $this->hasMany(DetailSubCategory::class,'sub_categories_id','id');
    }
}
