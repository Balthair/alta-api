<?php

use Illuminate\Database\Seeder;

class TypeOfVendorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_of_vendors')->delete();

        $records = [
            ['name' => "Insurance company"],
            ['name' => "Healthcare organization"],
            ['name' => "Institutional trustee"],
            ['name' => "Benefit provider"],
            ['name' => "Benefit administrator"],
            ['name' => "Asset manager"],
            ['name' => "Custodian"],
            ['name' => "Broker"],
            ['name' => "Consultant"],
            ['name' => "Actuary"],
            ['name' => "Auditor"],
            ['name' => "Lawyer"],
            ['name' => "Car leasing"],
            ['name' => "Long term car rental"],
            ['name' => "Car sharing"],
            ['name' => "Other"]
        ];

        DB::table('type_of_vendors')->insert($records);
    }
}
