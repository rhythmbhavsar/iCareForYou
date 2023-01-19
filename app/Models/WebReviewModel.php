<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebReviewModel extends Model
{
    use HasFactory;
    protected $table="web_review_models";
    protected $fillable=['name','email','message','user_img'];
}
