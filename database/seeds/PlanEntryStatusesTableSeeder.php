<?php

use Illuminate\Database\Seeder;

class PlanEntryStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plan_entry_statuses')->delete();

        $records = [
            ['name' => "Open"],
            ['name' => "Closed"]
        ];

        DB::table('plan_entry_statuses')->insert($records);
    }
}
