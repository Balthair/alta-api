<?php

use Illuminate\Database\Seeder;

class SpousePartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spouse_partners')->delete();

        $records = [
            ['name' => "Legally married"],
            ['name' => "Civil union"],
            ['name' => "Opposite Sex Domestic partner (not officially registered)"],
            ['name' => "Same Sex Domestic partner (not officially registered)"],
            ['name' => "Any other designated partner"]
        ];

        DB::table('spouse_partners')->insert($records);
    }
}
