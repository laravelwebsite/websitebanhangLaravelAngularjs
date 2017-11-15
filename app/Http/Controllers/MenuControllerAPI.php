<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Menu;
use App\User_Menu;
use Illuminate\Support\Facades\Auth;
class MenuControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$menus=Menu::orderBy('id','DESC')->get();
    	return json_encode($menus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$menu=new Menu;
    	$menu->name=$request->name;
    	$menu->src=$request->src;
    	
        if($menu->save())
        {
            $menuuser=new User_Menu;
            $menuuser->user_id=Auth::user()->id;
            $menuuser->menu_id=$menu->id;
            $menuuser->save();
        }
        return "Thêm thành công";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    	$menu=Menu::find($id);
    	return json_encode($menu);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    	$menu=Menu::find($id);
    	$menu->src=$request->src;
    	$menu->save();
    	return "Sửa thành công";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu=Menu::find($id);
        if($menu->count()>0)
        {

            $usermenu=User_Menu::where('menu_id',$menu->id)->get();
            foreach($usermenu as $u)
            {
                $u->delete();
            }
            
        }
        $menu->delete();
        return "Xóa thành công";
    }
}
