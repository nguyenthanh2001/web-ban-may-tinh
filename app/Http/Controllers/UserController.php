<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Roles;
use App\Admin;
use Session;
use DB;
use App\Http\Requests;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $admin = Admin::with('roles')->orderBy('admin_id','DESC')->get();
        return view('admin.users.all_users')->with(compact('admin'));
        
    }
    public function add_users(){
        return view('admin.users.add_users');
    }
    public function all_users(){
        $admin = Admin::with('roles')->orderBy('admin_id','DESC')->get();
        return view('admin.users.all_users')->with(compact('admin'));
    }

    public function assign_roles(Request $request){
        // $data = $request->all();
        // $user = Admin::where('admin_email',$data['admin_email'])->first();
        // $user->roles()->detach();
        // if($request['author_role']){
        //    $user->roles()->attach(Roles::where('name','author')->first());     
        // }
        // if($request['user_role']){
        //    $user->roles()->attach(Roles::where('name','user')->first());     
        // }
        // if($request['admin_role']){
        //    $user->roles()->attach(Roles::where('name','admin')->first());     
        // }
        // return redirect()->back();
        // $data = $request->all();
        // $user = Admin::where('admin_email',$data['admin_email'])->first();
        // $user->roles()->detach();
        // if($request['admin_role']){
        //     $user = Admin::find($admin_email);
        //     $user->delete();
        //     Session::put('message','Xóa tài khoản thành công');
        //     return redirect()->back();     
        // }
    
        //$this->AuthLogin();
        

        // if($request['user_role']){
        //    $user->roles()->attach(Roles::where('name','user')->first());     
        // }
        // if($request['admin_role']){
        //    $user->roles()->attach(Roles::where('name','admin')->first());     
        // }
    //     return redirect()->back()->with('message','Cấp quyền thành công');
        }
    public function store_users(Request $request){
        $data = $request->all();
        $admin = new Admin();
        $admin->admin_name = $data['admin_name'];
        $admin->admin_phone = $data['admin_phone'];
        $admin->admin_email = $data['admin_email'];
        $admin->admin_password = md5($data['admin_password']);
        $admin->save();
        $admin->roles()->attach(Roles::where('name','user')->first());
        Session::put('message','Thêm users thành công');
        return redirect()->route('trangadduser');
    }

    public function delete_user($admin_id){
        //$this->AuthLogin();
        
        // $this->AuthLogin();
        // $slider = Admin::find($email);
        // $slider->delete();
        // Session::put('message','Xóa slider thành công');
        // return redirect()->back();
        // $deleted = DB::table('tbl_admin')->where('admin_email', '=', $email)->delete();
        // return redirect()->route('trangalluser');
        
        DB::table('tbl_admin')->where('admin_id',$admin_id)->delete();
        Session::put('message','Xóa user thành công');
        return Redirect::to('all-users');

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



}
