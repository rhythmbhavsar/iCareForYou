<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductReviewModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_review_models', function (Blueprint $table) {
            $table->id();
            $table->string('name','255');
            $table->string('email','255');
            $table->string('pro_review_img')->nullable();
            $table->string('message','1000');
            $table->string('pro_id','5000');
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
        Schema::dropIfExists('product_review_models');
    }
}
