<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CategoryModel;
use App\Models\ProductReviewModel;
use App\Models\cart_model;
class ProductModel extends Model
{
    use HasFactory;
    protected $table="product_models";
    protected $fillable=['name','price','category','description','pro_img','status'];

    public function product()
    {
            return $this->belongsTo(CategoryModel::class,'category','id');
    }

}
