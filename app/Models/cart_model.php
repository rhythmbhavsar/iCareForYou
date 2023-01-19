<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductModel;

class cart_model extends Model
{
    use HasFactory;
    protected $table="cart_models";
    protected $fillable=['product_id','userid','qty','price','billno','pstatus'];

}
