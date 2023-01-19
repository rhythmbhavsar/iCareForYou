<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeamMemberModel;
use App\Models\SlidebarModel;
use App\Models\UserRegModel;
use App\Models\WebReviewModel;
use Session;
class TeamMemberController extends Controller
{
    public function teammember(){
        $member = TeamMemberModel::all();
        return view('adminpanel.teammemberentry',compact('member'));
    }
    public function insertmem(Request $request){

        $validated=$request->validate(['name'=>'required|max:50000','detail'=>'required|max:5000','designation'=>'required|max:500','github'=>'required|max:50000','facebook'=>'required|max:50000','instagram'=>'required|max:500000','linkedin'=>'required|max:50000','member_img'=>'required|max:500000']);

        $s= new TeamMemberModel;
        $s-> name=$request->input('name');
        $s-> detail=$request->input('detail');
        $s-> designation=$request->input('designation');
        $s-> github=$request->input('github');
        $s-> facebook=$request->input('facebook');
        $s-> instagram=$request->input('instagram');
        $s-> linkedin=$request->input('linkedin');
        if($request->hasfile('member_img')){

            $file = $request->file('member_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('upload/teammember/',$filename);
            $s->member_img = $filename;
        }
        $s->save();
        return redirect('/teammember')->with('status','Team Member Added Succesfully');
    }


    public function index(){
        $webreview=WebReviewModel::all();
        $member = TeamMemberModel::all();
        $slide = SlidebarModel::all();
        return view('userpanel.index',compact('member','webreview'),compact('slide'));
    }

    public function about(){
        
        $member = TeamMemberModel::all();
        return view('userpanel.about',compact('member'));
    }

    public function customerindex(){
        $id=Session::get('CustomerLoginId')['id'];
        $profile=UserRegModel::where('id',$id)->get();
        $member = TeamMemberModel::all();
        $slide = SlidebarModel::all();
        $webreview=WebReviewModel::all();
        return view('customerpanel.index',compact('member','slide','profile','webreview'));
    }

    public function c_about(){
        
        $member = TeamMemberModel::all();
        return view('customerpanel.about',compact('member'));
    }

    public function deletemember($id) {
        $delete = TeamMemberModel::find($id);
        $delete->delete();
        return redirect('/teammember')->with('status','Team member Deleted Succesfully');
    }

    public function editmember($id) {
       
       $member = TeamMemberModel::find($id);
    
       return view('adminpanel.editteammember',compact('member'));
   }

   public function edit_member(Request $request, $id){

       // $validated=$request->validate(['category'=>'required|max:50']);

       $validated=$request->validate(['name'=>'required|max:50000','detail'=>'required|max:5000','designation'=>'required|max:500','github'=>'required|max:50000','facebook'=>'required|max:50000','instagram'=>'required|max:500000','linkedin'=>'required|max:50000']);

       $s = TeamMemberModel::find($id);
       $s-> name=$request->input('name');
       $s-> detail=$request->input('detail');
       $s-> designation=$request->input('designation');
       $s-> github=$request->input('github');
       $s-> facebook=$request->input('facebook');
       $s-> instagram=$request->input('instagram');
       $s-> linkedin=$request->input('linkedin');
       if($request->hasfile('member_img')){

           $file = $request->file('member_img');
           $extention = $file->getClientOriginalExtension();
           $filename = time().'.'.$extention;
           $file->move('upload/teammember/',$filename);
           $s->member_img = $filename;
       }
       $s->update();
       return redirect('/teammember')->with('status','Team Member Edit Succesfully');
   }

}
