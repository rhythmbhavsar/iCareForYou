<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlidebarModel extends Model
{
    use HasFactory;
    protected $table="slidebar_models";
    protected $fillable=['title','description'];
}
