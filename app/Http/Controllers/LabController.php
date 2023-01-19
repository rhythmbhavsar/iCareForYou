<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LabLoginModel;


class LabController extends Controller
{
    //
    public function lab_register(){
        return view('adminpanel.lab_register');
    }

    public function insertlab(Request $request){

        $validated=$request->validate(['name'=>'required|max:50','email'=>'required|max:50','mobile'=>'required|max:10','password'=>'required|max:50','lab_code'=>'required|max:50']);
        $s= new LabLoginModel;
        $s-> name=$request->input('name');
        $s-> email=$request->input('email');
        $s-> mobile=$request->input('mobile');
        $s-> lab_code=$request->input('lab_code');
        $s-> password=$request->input('password');
        $s->save();
        return redirect('/lab_user')->with('status', 'Assistant Registered');
    }

    public function lab_user(){
        $lab_users = LabLoginModel::all();
        return view('adminpanel.lab_users',compact('lab_users'));
    }

    public function deletelab($id) {
        $delete = LabLoginModel::find($id);
        $delete->delete();
        return redirect('/lab_user')->with('status','Account Deleted Succesfully');
    }
}
