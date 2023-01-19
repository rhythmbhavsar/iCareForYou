<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRegModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_reg_models', function (Blueprint $table) {
            $table->id();
            $table->string('name','255');
            $table->string('email','255');
            $table->string('mobile','255');
            $table->string('address','10000');
            $table->string('password','255');
            $table->boolean('status')->default(1);
            $table->string('user_img')->nullable();
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
        Schema::dropIfExists('user_reg_models');
    }
}
