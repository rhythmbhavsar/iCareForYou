<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Models\PincodeModel;


class CategoryController extends Controller
{
    //
    public function add_category()
    {
        $category = CategoryModel::all();
        return view('adminpanel.add_category', compact('category'));
    }

    public function insertcat(Request $request)
    {

        $validated = $request->validate(['category' => 'required|max:50', 'cat_img' => 'required|max:5000']);

        $s = new CategoryModel;
        $s->category = $request->input('category');
        if ($request->hasfile('cat_img')) {

            $file = $request->file('cat_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('upload/category/', $filename);
            $s->cat_img = $filename;
        }
        $s->save();
        return redirect('/add_category')->with('status', 'Category Added Succesfully');
    }

    public function category()
    {
        $category = CategoryModel::all();
        return view('userpanel.category', compact('category'));
    }

    public function c_category()
    {
        $category = CategoryModel::all();
        return view('customerpanel.category', compact('category'));
    }

    public function deleteproduct($id)
    {
        $delete = CategoryModel::find($id);
        $delete->delete();
        return redirect('/add_category')->with('status', 'Category Deleted Succesfully');
    }

    public function editproduct($id)
    {
        $category = CategoryModel::find($id);
        return view('adminpanel.editcategory', compact('category'));
    }

    public function updatecat(Request $request, $id)
    {

        $validated = $request->validate(['category' => 'required|max:50']);

        $s = CategoryModel::find($id);
        $s->category = $request->input('category');
        if ($request->hasfile('cat_img')) {

            $file = $request->file('cat_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('upload/category/', $filename);
            $s->cat_img = $filename;
        }
        $s->update();
        return redirect('/add_category')->with('status', 'Category Updated Succesfully');
    }

    public function add_pin()
    {
        $pin = PincodeModel::all();
        return view('adminpanel.pincode', compact('pin'));
    }

    public function insertpin(Request $request)
    {

        $validated = $request->validate(['pincode' => 'required|numeric|digits:6']);

        $s = new PincodeModel;
        $s->pincode = $request->input('pincode');
        $s->save();
        return redirect('/add_pin')->with('status', 'Pincode Added Succesfully');
    }

    public function deletepin($id)
    {
        $delete = PincodeModel::find($id);
        $delete->delete();
        return redirect('/add_pin')->with('status', 'Pincode Deleted Succesfully');
    }

    public function editpin($id)
    {
        $pin = PincodeModel::find($id);
        return view('adminpanel.editpin', compact('pin'));
    }

    public function updatepin(Request $request, $id)
    {

        // $validated=$request->validate(['category'=>'required|max:50']);

        $s = PincodeModel::find($id);
        $s->pincode = $request->input('pincode');
        $s->update();
        return redirect('/add_pin')->with('status', 'Pincode Updated Succesfully');
    }

    public function checkout()
    {
        $drop = PincodeModel::all();
        return view('customerpanel.checkout', compact('drop'));
    }
}
