<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('title');
            $table->string('department');
            $table->string('client_relationship_role');
            $table->boolean('is_billing');
            $table->string('work_phone_number');
            $table->string('mobile_number');
            $table->string('email');
            $table->timestamp('client_relationship_starter');
            $table->timestamp('client_relationship_ended');
            $table->timestamp('date_termination_company');
            $table->timestamp('date_system_access_start');
            $table->timestamp('date_system_access_ended');
            $table->integer('corporate_id');
            $table->string('business_name');
            $table->integer('entity_name');
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
        Schema::dropIfExists('contacts');
    }
}
