<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabAdd extends Model
{
    use HasFactory;
    protected $table="lab_adds";
    protected $fillable=['address'];
}
