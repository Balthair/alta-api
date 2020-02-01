<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeingkeyToCorporateAnualInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('corporate_anual_information', function (Blueprint $table) {
            $table->bigInteger('corporate_id')->unsigned()->change();
            $table->foreign('corporate_id')->references('id')->on('corporates');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('corporate_anual_information', function (Blueprint $table) {
            //
        });
    }
}
