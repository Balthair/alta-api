<?php

use Illuminate\Database\Seeder;

class HealthPlanCoverageListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('health_plan_coverage_lists')->delete();

        $records = [
            ['name' => "Hospitalization / Inpatient"],
            ['name' => "Outpatient"],
            ['name' => "Serious Illnesses / Major Medical"],
            ['name' => "Prescription Drugs"],
            ['name' => "Diagnostics"],
            ['name' => "Maternity"],
            ['name' => "Preventative Care"],
            ['name' => "Dental"],
            ['name' => "Vision"]
        ];

        DB::table('health_plan_coverage_lists')->insert($records);
    }
}
