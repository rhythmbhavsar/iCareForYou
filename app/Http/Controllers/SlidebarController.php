<?php

namespace App\Http\Controllers;
use App\Models\SlidebarModel;
use Illuminate\Http\Request;

class SlidebarController extends Controller
{
    //
    public function edit_homepage(){
        $slide = SlidebarModel::all();
        return view('adminpanel.homepage',compact('slide'));
        // return view('adminpanel.homepage');
    }

    public function insertslide(Request $request){

        $validated=$request->validate(['title'=>'required|max:50000','description'=>'required|max:5000']);

        $s= new SlidebarModel;
        $s-> title=$request->input('title');
        $s-> description=$request->input('description');
        $s->save();
        return redirect('/edit_homepage')->with('status','Team Member Added Succesfully');
    }

    public function deleteslide($id) {
        $delete = SlidebarModel::find($id);
        $delete->delete();
        return redirect('/edit_homepage')->with('status','Slide Delete Succesfully');
    }

    public function edithomepage($id){
        $slide = SlidebarModel::find($id);
        return view('adminpanel.edithomepage',compact('slide'));
        // return view('adminpanel.homepage');
    }

    public function updatehomepage(Request $request, $id){

        $validated=$request->validate(['title'=>'required|max:50000','description'=>'required|max:5000']);


        $s= SlidebarModel::find($id);
        $s-> title=$request->input('title');
        $s-> description=$request->input('description');
        $s->update();
        return redirect('/edit_homepage')->with('status','Slide data Edit Succesfully');
    }


}
