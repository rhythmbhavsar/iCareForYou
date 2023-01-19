<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactModel;


class ContactController extends Controller
{
    //
    public function contact(){
        return view('userpanel.contact');
    }

    public function contact_u(Request $request){
        $s= new ContactModel;
        $s-> name=$request->input('name');
        $s-> email=$request->input('email');
        $s-> subject=$request->input('subject');
        $s-> message=$request->input('message');
        $s->save();
        return redirect('/contact');
    }

    public function c_contact(){
        return view('customerpanel.contact');
    }
    public function contact_c(Request $request){
        $s= new ContactModel;
        $s-> name=$request->input('name');
        $s-> email=$request->input('email');
        $s-> subject=$request->input('subject');
        $s-> message=$request->input('message');
        $s->save();
        return redirect('/c_contact');
    }

    public function contacted() {
        $contact = ContactModel::all();
        return view('adminpanel.contact',compact('contact'));
     }

     public function deletecontact($id){
       
        $delete = ContactModel::find($id);
        $delete->delete();
        return redirect('/contacted')->with('status','Contact data Delete Succesfully');
    }
}
