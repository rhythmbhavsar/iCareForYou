<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminLogInModel;
use App\Models\UserRegModel;
use App\Models\LabLoginModel;
use Session;


class AdminLogInController extends Controller
{
    //
    public function login(){
        return view('userpanel.login');
    }

    public function check(Request $request){


        $validated=$request->validate(['email'=>'required|email|unique:users','password'=>'required|max:10']);

        if($request->user=="admin"){
            $data = AdminLogInModel::where(['email'=>$request->email,'password'=>$request->password])->first();
            if($data){
                $request->session()->put('AdminLoginId',$data);
                return redirect('/adminindex');
            }
            return back()->with('fail','Invalid email or password');
        }

        elseif($request->user=="user"){
            $data = UserRegModel::where(['email'=>$request->email,'password'=>$request->password])->first();
            if($data){
                $request->session()->put('CustomerLoginId',$data);
                return redirect('/customerindex');
            }
            return back()->with('fail','Invalid email or password');
        }
        elseif($request->user=="lab"){
            $data = LabLoginModel::where(['email'=>$request->email,'password'=>$request->password])->first();
            if($data){
                $request->session()->put('LabLoginId',$data);
                return redirect('/labindex');
            }
            return back()->with('fail','Invalid email or password');
        }
        elseif($request->user==""){
            return back()->with('fail','Fill your Field');
        }
    }

    public function AdminLogOut(){
        Session::Forget('AdminLoginId');
        return redirect('/index');
    }

    public function CustLogOut(){
        Session::Forget('CustomerLoginId');
        return redirect('/index');
    }
    
    public function lab_logout(){
        Session::Forget('LabLoginId');
        return redirect('/index');
    }

    public function c_profile(){
        $id=Session::get('CustomerLoginId')['id'];
         $profile=UserRegModel::where('id',$id)->get();
         return view('customerpanel.profile',compact('profile'));
    }

}
