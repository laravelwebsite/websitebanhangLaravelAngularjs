<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Menu;
use App\Role;
use App\Product;
use App\Store;
class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'users';
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class,'role_id','id');
    }
    public function product()
    {
        return $this->hasMany(Product::class,'user_id','id');
    }
    public function store()
    {
        return $this->hasOne(Store::class,'user_id','id');
    }
}
