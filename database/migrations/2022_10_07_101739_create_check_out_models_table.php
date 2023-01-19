<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckOutModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('check_out_models', function (Blueprint $table) {
            $table->id();
            $table->string('custname','255');
            $table->string('address','255');
            $table->string('mobile','255');
            $table->string('custemail','255');
            $table->string('pincode','255');
            $table->string('billno')->default(0);
            $table->string('custid','255');
            $table->string('shippingtype','255');
            $table->string('total','255');
            $table->string('orderdate','255');
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
        Schema::dropIfExists('check_out_models');
    }
}
