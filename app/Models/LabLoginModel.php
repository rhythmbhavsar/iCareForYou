<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabLoginModel extends Model
{
    use HasFactory;
    protected $table="lab_login_models";
    protected $fillable=['name','email','mobile','lab_code','password','status'];
}
