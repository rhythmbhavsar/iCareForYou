<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMemberModel extends Model
{
    use HasFactory;
    protected $table="team_member_models";
    protected $fillable=['member_img','name','detail','designation','github','facebook','instagram','linkedin'];
}
