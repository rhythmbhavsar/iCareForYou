<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\CategoryModel;
use App\Models\UserRegModel;
use App\Models\ProductModel;

class ChartController extends Controller
{
    //
    public function adminindex(){
       
        $category=CategoryModel::count();
        $users=UserRegModel::count();
        $product=ProductModel::count();
        $result=DB::select(DB::raw("SELECT count(*) as total_product,category_models.category from product_models LEFT JOIN category_models on category_models.id=product_models.category GROUP BY category"));
        $chartdata="";
        foreach($result as $list){
            $chartdata.="['".$list->category."',".$list->total_product."],";
        }
        $arr['chartdata']=$chartdata=rtrim($chartdata,",");
        // echo $chartdata;
       return view('adminpanel.adminindex',$arr,compact('category','users','product'));
    }
}
