<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorporatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('identifier');
            $table->string('name');
            $table->integer('parent_id');
            $table->string('legal_form_organization');
            $table->boolean('is_public');
            $table->string('ticker_symbol');
            $table->string('sector_industry');
            $table->string('main_competitors');
            $table->string('address');
            $table->integer('year_incorporated');
            $table->string('fiscal_year_end');
            $table->boolean('id_default_specific_region');
            $table->string('relationship');
            $table->integer('corporate_id');
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
        Schema::dropIfExists('corporates');
    }
}
