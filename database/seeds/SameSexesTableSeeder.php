<?php

use Illuminate\Database\Seeder;

class SameSexesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('same_sexes')->delete();

        $records = [
            ['name' => "Not eligible"],
            ['name' => "Opposite sex only"],
            ['name' => "Same and opposite sex"],
            ['name' => "Same sex only"]
        ];

        DB::table('same_sexes')->insert($records);
    }
}
