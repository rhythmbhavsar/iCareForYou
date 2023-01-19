<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminLogInModel extends Model
{
    use HasFactory;
    protected $table="admin_log_in_models";
    protected $fillable=['email','password'];
}
