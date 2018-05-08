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
    	$menus=Menu::where('delete',1)->orderBy('id','DESC')->get();
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
        $find=Menu::where('name',$request->name)->first();
        if($find)
        {
            $find->src=$request->src;
            $find->delete=1;
             if($find->save())
            {
                $user_id=Auth::user()->id;
                $menu_id=$find->id;
                $find=User_Menu::where('user_id',$user_id)->where('menu_id',$menu_id)->first();
                if($find->count()>0)
                {
                    $find->delete=1;
                    $find->save();
                }
                else
                {
                    $menuuser=new User_Menu;
                    $menuuser->user_id=Auth::user()->id;
                    $menuuser->menu_id=$find->id;
                    $menuuser->delete=1;
                    $menuuser->save();
                }
                
            }
            return "Thêm thành công";
        }
        else
        {
            $menu=new Menu;
            $menu->name=$request->name;
            $menu->src=$request->src;
            $menu->delete=1;
             if($menu->save())
            {
                $menuuser=new User_Menu;
                $menuuser->user_id=Auth::user()->id;
                $menuuser->menu_id=$menu->id;
                $menuuser->delete=1;
                $menuuser->save();
            }
            return "Thêm thành công";
        }	
       
        
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
        $menu->delete=0;
        if($menu->save())
        {

            $usermenu=User_Menu::where('menu_id',$menu->id)->get();
            foreach($usermenu as $u)
            {
                $u->delete=0;
                $u->save();
            }
            
        }
        return "Xóa thành công";
    }
}
