<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRegModel extends Model
{
    use HasFactory;
    protected $table="user_reg_models";
    protected $fillable=['name','email','mobile','address','password','status','user_img'];
}
