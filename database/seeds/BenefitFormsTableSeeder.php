<?php

use Illuminate\Database\Seeder;

class BenefitFormsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('benefit_forms')->delete();

        $records = [
            ['name' => "Lump sum"],
            ['name' => "Annuity"],
            ['name' => "Combination"],
        ];

        DB::table('benefit_forms')->insert($records);
    }
}
