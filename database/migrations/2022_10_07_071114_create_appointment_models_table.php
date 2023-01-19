<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment_models', function (Blueprint $table) {
            $table->id();
            $table->string('user_id','255');
            $table->string('name','255');
            $table->string('email','255');
            $table->string('mobile','255');
            $table->string('address','255');
            $table->string('t_type','255');
            $table->string('date','255');
            $table->string('time_slot','255');
            $table->string('status')->default(0);
            $table->string('cancel_status')->default(0);
            $table->string('result_status')->default(0);
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
        Schema::dropIfExists('appointment_models');
    }
}
