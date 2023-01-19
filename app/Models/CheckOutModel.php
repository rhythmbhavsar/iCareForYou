<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckOutModel extends Model
{
    use HasFactory;
    protected $table="check_out_models";
    protected $fillable=['custname','address','mobile','custemail','pincode','billno','custid','shippingtype','total', 'orderdate'];
}
