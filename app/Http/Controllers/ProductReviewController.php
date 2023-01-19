<?php

namespace App\Http\Controllers;
use App\Models\ProductReviewModel;
use Illuminate\Http\Request;
use App\Models\WebReviewModel;
use App\Models\ProductModel;
use Session;
class ProductReviewController extends Controller
{
    //
    public function insertweb_rev(Request $request){

        $validated=$request->validate([
            'name'=>'required|max:500',
            'email'=>'required|max:5000',
            'message'=>'required|max:255',
           
            'pro_review_img'=>'required|max:5000'
        ]);

        $s= new WebReviewModel;
        $s-> name=$request->input('name');
        $s-> email=$request->input('email');
        $s-> message=$request->input('message');
        $s-> user_img=$request->input('pro_review_img');
       
       
        // if($request->hasfile('user_img')){

        //     $file = $request->file('user_img');
        //     $extention = $file->getClientOriginalExtension();
        //     $filename = time().'.'.$extention;
        //     $file->move('upload/category/',$filename);
        //     $s->user_img = $filename;
        // }
        
        $s->save();
        return redirect('/customerindex')->with('status','Review Added Succesfully');
    }

    public function webreview(){
        $review = WebReviewModel::all();
        return view('adminpanel.webreview',compact('review'));
    }


    public function productreview(){
     
        $review = ProductReviewModel::join('product_models', 'product_models.id', '=', 'product_review_models.pro_id')->get(['product_review_models.*', 'product_models.pro_name']);
      
        return view('adminpanel.productreview',compact('review'));
    }

    public function insertpro_rev(Request $request){

        $validated=$request->validate([
            'name'=>'required|max:500',
            'email'=>'required|max:5000',
            'message'=>'required|max:500',
            'pro_id'=>'required|max:5000',
            'pro_review_img'=>'required|max:5000'
        ]);

        $s= new ProductReviewModel;
        $s-> name=$request->input('name');
        $s-> email=$request->input('email');
        $s-> message=$request->input('message');
    
        $s-> pro_id=$request->input('pro_id');
       
       
       
        if($request->hasfile('pro_review_img')){

            $file = $request->file('pro_review_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('upload/product_review/',$filename);
            $s->pro_review_img = $filename;
        }
        
        $s->save();
        return redirect('/customerindex');
    }

    public function deletewebreview($id) {
        $delete = WebReviewModel::find($id);
        $delete->delete();
        return redirect('/webreview')->with('status','Web Review Data  Deleted Succesfully');
    }

    public function deleteproductreview($id) {
        $delete = ProductReviewModel::find($id);
        $delete->delete();
        return redirect('/productreview')->with('status','Product Review Data  Deleted Succesfully');
    }
}
