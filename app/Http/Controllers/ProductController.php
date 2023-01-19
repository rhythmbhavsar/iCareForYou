<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\ProductReviewModel;
use App\Models\cart_model;
use App\Models\PincodeModel;
use App\Models\CheckOutModel;
use DB;


class ProductController extends Controller
{
    //
    public function add_product()
    {
        $category = CategoryModel::with('category')->get();
        $product = ProductModel::with('product')->get();
        return view('adminpanel.add_product', compact('category', 'product'));
    }

    public function insertpro(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|max:500',
            'price' => 'required|max:5000',
            'category' => 'required|max:500',
            'description' => 'required|max:5000',
            'pro_img' => 'required|max:5000'
        ]);

        $s = new ProductModel;
        $s->pro_name = $request->input('name');
        $s->price = $request->input('price');
        $s->category = $request->input('category');
        $s->description = $request->input('description');
        if ($request->hasfile('pro_img')) {

            $file = $request->file('pro_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('upload/product/', $filename);
            $s->pro_img = $filename;
        }
        $s->save();
        return redirect('/add_product')->with('status', 'Product Added Succesfully');
    }

    public function product($id)
    {

        $product = ProductModel::all()->where('category', '=', $id);
        return view('userpanel.product', compact('product'));
    }

    public function delete_product($id)
    {

        $delete = ProductModel::find($id);
        $delete->delete();
        return redirect('/add_product')->with('status', 'Product Delete Succesfully');
    }

    public function edit_product($id)
    {
        $category = CategoryModel::all();
        $product = ProductModel::find($id);
        // $delete->delete();
        return view('adminpanel.editproduct', compact('product'), compact('category'));
    }

    public function updatepro(Request $request, $id)
    {

        // $validated=$request->validate(['category'=>'required|max:50']);

        $s = ProductModel::find($id);
        $s->pro_name = $request->input('name');
        $s->price = $request->input('price');
        $s->category = $request->input('category');
        $s->description = $request->input('description');
        if ($request->hasfile('pro_img')) {

            $file = $request->file('pro_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('upload/product/', $filename);
            $s->pro_img = $filename;
        }
        $s->update();
        return redirect('/add_product')->with('status', 'Category Updated Succesfully');
    }

    public function c_product($id)
    {

        $product = ProductModel::all()->where('category', '=', $id);



        return view('customerpanel.product', compact('product'));
    }

    public function product_detail($id)
    {

        $pro_review = ProductReviewModel::all()->where('pro_id', '=', $id);
        $product_detail = ProductModel::find($id);
        return view('userpanel.product_detail', compact('product_detail'), compact('pro_review'));
    }

    public function c_product_detail($id)
    {

        $c_product_detail = ProductModel::find($id);
        $pro_review = ProductReviewModel::all()->where('pro_id', '=', $id);
        return view('customerpanel.product_detail', compact('c_product_detail'), compact('pro_review'));
    }

    public function addtocart(Request $request)
    {


        if ($request->session()->has('CustomerLoginId')) {

            $check = cart_model::where(['product_id' => $request->product_id, 'pstatus' => 'cart', 'userid' => $request->session()->get('CustomerLoginId')['id']])->first();

            if ($check) {
                $s1 = $request->input('qty');
                $s4 = $request->input('price');
                $s = cart_model::find($check->id);
                $s2 = $s->qty + $s1;
                $s->qty = $s2;
                $s->update();
            } else {


                $s = new cart_model;
                $s->product_id = $request->input('product_id');
                $s->qty = $request->input('qty');
                $s->billno = $request->input('billno');
                $s->price = $request->input('price');
                $s->pstatus = $request->input('pstatus');
                $s->userid = $request->session()->get('CustomerLoginId')['id'];
                $s->save();
            }
            return redirect('/c_cart')->with('status', 'Product Added Succesfully');
        }
    }

    public function c_cart()
    {

        $id = session()->get('CustomerLoginId')['id'];
        $cart = cart_model::where(['userid' => $id, 'pstatus' => 'cart'])->get();
        $drop = PincodeModel::all();
        return view('customerpanel.cart', compact('cart', 'drop'));
    }

    public function dlt_cart($id)
    {
        $delete = cart_model::find($id);
        $delete->delete();
        return redirect('/c_cart')->with('status', 'Category Deleted Succesfully');
    }

    static function cartitem()
    {
        $id = session()->get('CustomerLoginId')['id'];
        return cart_model::where(['userid' => $id, 'pstatus' => 'cart'])->count();
    }
    
    public function updatecart(Request $request, $id)
    {
        
        // $validated=$request->validate(['category'=>'required|max:50']);
        
        $s = cart_model::find($id);
        $s->qty = $request->input('qty');
        $s->update();
        return redirect('/c_cart')->with('status', 'Cart Updated Succesfully');
    }
    
    public function checkoutinsert(Request $request)
    {
        
        // $validated=$request->validate(['category'=>'required|max:50']);

        if ($request->session()->has('CustomerLoginId')) {
            
            $id=session()->get('CustomerLoginId')['id'];
            $s = new CheckOutModel;
            $s->custid = $id;
            $s->custname = $request->input('custname');
            $s->address = $request->input('address');
            $s->mobile = $request->input('mobile');
            $s->custemail = $request->input('custemail');
            $s->pincode = $request->input('pincode');
            $s->billno = $request->input('billno');
            $s->shippingtype = $request->input('shippingtype');
            $s->total = $request->input('total');
            $s->orderdate = $request->input('orderdate');
            $s->save();
            
            $checkoutid = $s->id;
            $s->billno=$checkoutid;
            $s->update();

            $updatearray = [
                'billno'=>$checkoutid,
                'pstatus'=>'order'
            ];
            
            DB::table('cart_models')->where(['userid'=>$s->custid, 'pstatus'=>'cart', 'billno'=>'0'])->update($updatearray);

            return redirect('/c_cart')->with('status', 'Checkout Succesfully');
        }
    }

    static function c_order()
    {
        $id = session()->get('CustomerLoginId')['id'];
        $prod = CheckOutModel::where(['custid' => $id])->get();
        return view('customerpanel.view_orders', compact('prod'));
    }
    
    static function order_detail($id)
    {
        $prod = cart_model ::where(['billno' => $id])->get();
        return view('customerpanel.order_detail', compact('prod'));
    }

    public function updateqty($id)
    {

        $cart = cart_model::find($id);
        return view('customerpanel.updateqty', compact('cart'));
    }
}
