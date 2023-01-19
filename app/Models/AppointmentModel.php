<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentModel extends Model
{
    use HasFactory;
    protected $table="appointment_models";
    protected $fillable=['user_id','name','email','mobile','address','t_type','date','time_slot','status','cancel_status','result_status'];
}
