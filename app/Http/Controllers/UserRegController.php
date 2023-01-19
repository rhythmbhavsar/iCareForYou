<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserRegModel;

class UserRegController extends Controller
{
    //
    public function register(){
        return view('userpanel.register');
    }

    public function insertdata(Request $request){

        $validated=$request->validate(['name'=>'required|max:50','email'=>'required|max:50','mobile'=>'required|numeric|digits:10','password'=>'required|max:50','address'=>'required|max:50','user_img'=>'required|max:50000']);
        $s= new UserRegModel;
        $s-> name=$request->input('name');
        $s-> email=$request->input('email');
        $s-> mobile=$request->input('mobile');
        $s-> address=$request->input('address');
        $s-> password=$request->input('password');
       
        if($request->hasfile('user_img')){

            $file = $request->file('user_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('upload/user/',$filename);
            $s->user_img = $filename;
        }
        $s->save();
        return redirect('/login');
    }

    public function users(){
        $users = UserRegModel::all();
        return view('adminpanel.registered_users',compact('users'));
    }

    public function deleteuser($id) {
        $delete = UserRegModel::find($id);
        $delete->delete();
        return redirect('/users')->with('status','Account Deleted Succesfully');
    }
    public function editprofile($id){
        $users = UserRegModel::find($id);
        return view('customerpanel.editprofile',compact('users'));
       
    }
    public function edit_profiledata(Request $request, $id){

        $validated=$request->validate(['name'=>'required|max:50','email'=>'required|max:50','mobile'=>'required|max:10','password'=>'required|max:50','address'=>'required|max:50','user_img'=>'required|max:50000']);
       
        $s = UserRegModel::find($id);
          $s-> name=$request->input('name');
        $s-> email=$request->input('email');
        $s-> mobile=$request->input('mobile');
        $s-> address=$request->input('address');
        $s-> password=$request->input('password');
       
        if($request->hasfile('user_img')){

            $file = $request->file('user_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('upload/user/',$filename);
            $s->user_img = $filename;
        }
        $s->update();
        return redirect('/c_profile')->with('status','Details Updated Succesfully');
    }

   
}
