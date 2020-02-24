<?php

use Illuminate\Database\Seeder;

class BenefitProgramsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('benefit_programs')->delete();

        $records = [
            ['name' => "Life insurance"],
            ['name' => "Survivor's Pension"]
        ];

        DB::table('benefit_programs')->insert($records);
    }
}
