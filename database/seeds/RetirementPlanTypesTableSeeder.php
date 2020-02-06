<?php

use Illuminate\Database\Seeder;

class RetirementPlanTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('retirement_plan_types')->delete();

        $records = [
            ['name' => "Defined Benefit (DB)"],
            ['name' => "Defined Contribution (DC)"],
            ['name' => "Cash Balance (CB)"],
            ['name' => "Other"],
        ];

        DB::table('retirement_plan_types')->insert($records);
    }
}
