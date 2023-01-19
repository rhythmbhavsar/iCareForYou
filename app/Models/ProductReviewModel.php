<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductModel;
class ProductReviewModel extends Model
{
    use HasFactory;
    protected $table="product_review_models";
    protected $fillable=['name','email','pro_review_img','message','pro_id'];


    public function product_id()
    {
            return $this->belongsTo(ProductModel::class,'pro_id','id');
    }
}
