<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorporateAnualInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporate_anual_information', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('corporate_id');
            $table->integer('year');
            $table->integer('region_number');
            $table->integer('country_number');
            $table->integer('worldwide_employees');
            $table->integer('revenues');
            $table->integer('net_income');
            $table->integer('user_created');
            $table->integer('user_updated');
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
        Schema::dropIfExists('corporate_anual_information');
    }
}
