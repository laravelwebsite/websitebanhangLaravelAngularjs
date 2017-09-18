<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Menu;
class User_Menu extends Model
{
    protected $table = 'usermenus';

    protected $fillable = [];

    public function menu()
    {
    	return $this->belongsTo(Menu::class,'menu_id','id');
    }
    public function user()
    {
    	return $this->belongsTo(Menu::class,'user_id','id');
    }
}
