<?php

use Illuminate\Database\Seeder;

class PaymentOptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_options')->delete();

        $records = [
            ['name' => "Lump sum"],
            ['name' => "Annuity"],
            ['name' => "Combination"],
            ['name' => "Choice"],
            ['name' => "Other"]
        ];

        DB::table('payment_options')->insert($records);
    }
}
