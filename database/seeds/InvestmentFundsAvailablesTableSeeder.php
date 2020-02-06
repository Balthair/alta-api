<?php

use Illuminate\Database\Seeder;

class InvestmentFundsAvailablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('investment_funds_availables')->delete();

        $records = [
            ['name' => "No choice"],
            ['name' => "2 to 3"],
            ['name' => "4 to 6"],
            ['name' => "6 to 10"],
            ['name' => "> 10"]
        ];

        DB::table('investment_funds_availables')->insert($records);
    }
}
