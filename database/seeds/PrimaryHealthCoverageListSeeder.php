<?php

use Illuminate\Database\Seeder;

class PrimaryHealthCoverageListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primary_health_coverage_lists')->delete();

        $records = [
            ['name' => "Reimbursement basis"],
            ['name' => "Direct settlement"],
            ['name' => "Cash allowance / indemnity"],
            ['name' => "Discounted medical care"]
        ];

        DB::table('primary_health_coverage_lists')->insert($records);
    }
}
