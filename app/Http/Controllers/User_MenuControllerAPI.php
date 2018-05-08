<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_Menu;
class User_MenuControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usermenu=User_Menu::where('delete',1)->orderBy('user_id','ASC')->get();
        foreach($usermenu as $u)
        {
            $u->menu;
            $u->user;
        }
        return json_encode($usermenu);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id=$request->user_id;
        $menu_id=$request->menu_id;
        $find=User_Menu::where('user_id',$user_id)->where('menu_id',$menu_id)->first();
        if($find)
        {
            if($find->delete==1)
            {
                return "Đã tồn tại trong dữ liệu";
            }
            else
            {
                $find->delete=1;
                $find->save();
                return "Thêm thành công";
            }
            
        }
        else
        {
            $usermenu=new User_Menu;
            $usermenu->user_id=$request->user_id;
            $usermenu->menu_id=$request->menu_id;
            $usermenu->delete=1;
            $usermenu->save();
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
        $usermenu=User_Menu::find($id);
        $usermenu->user;
        $usermenu->menu;
        return json_encode($usermenu);
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

        $user_id=$request->user_id;
        $menu_id=$request->menu_id;
        $find=User_Menu::where('user_id',$user_id)->where('menu_id',$menu_id)->get();
        if(count($find)>0)
        {
            return "Đã tồn tại trong dữ liệu";
        }
        else
        {
         $usermenu=User_Menu::find($id);
         $usermenu->user_id=$request->user_id;
         $usermenu->menu_id=$request->menu_id;
         $usermenu->save();
         return "Sửa thành công";
     }

 }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usermenu=User_Menu::find($id);
        $usermenu->delete=0;
        $usermenu->save();
        return "Xóa thành công";
    }
}
