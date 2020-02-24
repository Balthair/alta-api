<?php

use Illuminate\Database\Seeder;

class FinancingVehiclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('financing_vehicles')->delete();

        $records = [
        ];

        DB::table('financing_vehicles')->insert($records);
    }
}
