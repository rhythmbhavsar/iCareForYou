<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductModel;
class CategoryModel extends Model
{
    use HasFactory;
    protected $table="category_models";
    protected $fillable=['category','cat_img'];


    public function category()
    {
            return $this->hasmany(ProductModel::class,'category','id');
    }
}
