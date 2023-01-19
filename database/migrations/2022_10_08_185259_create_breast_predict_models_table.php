<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBreastPredictModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('breast_predict_models', function (Blueprint $table) {
            $table->id();
            $table->string('patient_id', '255');
            $table->string('name', '255');
            $table->string('email', '255');
            $table->string('mobile', '255');
            $table->string('mean_radius', '255');
            $table->string('mean_texture', '255');
            $table->string('mean_perimeter', '255');
            $table->string('mean_area', '255');
            $table->string('mean_smoothness', '255');
            $table->string('mean_compactness', '255');
            $table->string('mean_concavity', '255');
            $table->string('mean_concave_points', '255');
            $table->string('mean_symmetry', '255');
            $table->string('mean_fractal_dimension', '255');
            $table->string('radius_error', '255');
            $table->string('texture_error', '255');
            $table->string('perimeter_error', '255');
            $table->string('area_error', '255');
            $table->string('smoothness_error', '255');
            $table->string('compactness_error', '255');
            $table->string('concavity_error', '255');
            $table->string('concave_points_error', '255');
            $table->string('symmetry_error', '255');
            $table->string('fractal_dimension_error', '255');
            $table->string('worst_radius', '255');
            $table->string('worst_texture', '255');
            $table->string('worst_perimeter', '255');
            $table->string('worst_area', '255');
            $table->string('worst_smoothness', '255');
            $table->string('worst_compactness', '255');
            $table->string('worst_concavity', '255');
            $table->string('worst_concave_points', '255');
            $table->string('worst_symmetry', '255');
            $table->string('worst_fractal_dimension', '255');
            $table->string('outcome', '255');
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
        Schema::dropIfExists('breast_predict_models');
    }
}
