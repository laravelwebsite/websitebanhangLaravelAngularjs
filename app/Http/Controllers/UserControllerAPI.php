<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
class UserControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //tbUser(get)
    public function index()
    {
        if(Auth::user()->role_id==4)
        {
            $listUser=User::where('delete',1)->orderBy('created_at','DESC')->get();
            
        }
        if(Auth::user()->role_id==3)
        {
            $listUser=User::where('delete',1)->where('role_id',1)->orWhere('role_id',2)->orderBy('created_at','DESC')->get();
        }
        foreach($listUser as $list)
        {
            $list->role;
        }

        return $listUser;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //tbUser/create(get)
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
    //tbUser (POST)
    public function store(Request $request)
    {
        //bcrypt($request->password);
        $find=User::where('email',$request->email)->first();
        if($find)
        {
            $find->delete=1;
            $find->save();
        }
        else
        {
            $user=new User;
            $user->name=$request->name;
            $user->email=$request->email;
            $user->role_id=$request->role_id;
            $user->password=bcrypt($request->password);
            $user->delete=1;
            $user->save();
        }
        
        return "Thêm thành công";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //tbUser/id (get)
    public function show($id)
    {
        $user=User::find($id);
        $user->role;
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //tbUser/id/edit(get)
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
    //tbUser/id PUT
    public function update(Request $request, $id)
    {
        $user=User::find($id);
        if(count($user)>0)
        {
            $user->name=$request->name;
            $user->role_id=$request->role_id;
            $user->save();
            return "Sửa thành công";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //tbUser/id (delete)
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete=0;
        $user->save();
        return "Xóa thành công";
    }
}
