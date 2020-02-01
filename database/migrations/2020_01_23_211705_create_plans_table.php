<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('identifier');
            $table->string('name');
            $table->bigInteger('country_id');
            $table->string('region');
            $table->integer('year');
            $table->boolean('is_part_multi_employee');
            $table->integer('sponsor_organization_name');
            $table->boolean('design_changes');
            $table->boolean('describe_changes');
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
        Schema::dropIfExists('plans');
    }
}
