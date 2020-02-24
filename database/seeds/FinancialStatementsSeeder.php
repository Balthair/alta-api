<?php

use Illuminate\Database\Seeder;

class FinancialStatementsTableSeeder extends Seeder
{
    public function run() {
        DB::table('financial_statements')->delete();

        $records = [
            ['name' => "US GAAP"],
            ['name' => "IFRS"],
            ['name' => "Other"],
        ];

        DB::table('financial_statements')->insert($records);
    }
}
