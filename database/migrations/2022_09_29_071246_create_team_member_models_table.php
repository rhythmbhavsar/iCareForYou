<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamMemberModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_member_models', function (Blueprint $table) {
            $table->id();
            $table->string('member_img')->nullable();
            $table->string('name','255');
            $table->string('detail','2000');
            $table->string('designation','255');
            $table->string('github','255');
            $table->string('facebook','255');
            $table->string('instagram','255');
            $table->string('linkedin','255');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team_member_models');
    }
}
