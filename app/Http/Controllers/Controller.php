<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Session;
use App\Models\UserRegModel;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    
//  public function __construct()
//  {
//     $id=Session::get('CustomerLoginId')['id'];
//     $baseprofile=UserRegModel::where('id',$id)->get();
//      view()->share('baseprofile',$baseprofile);
//  }
}
