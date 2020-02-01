<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToEmployeeCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employee_companies', function (Blueprint $table) {
            $table->boolean('have_works_council');
            $table->text('applicable_collective_agreements');
            $table->timestamp('demographic_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employee_company', function (Blueprint $table) {
            //
        });
    }
}
