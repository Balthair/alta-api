<?php

use Illuminate\Database\Seeder;

class ParticipantCriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('participant_criterias')->delete();

        $records = [
            ['name' => "No coverage possible"],
            ['name' => "Mandatory"],
            ['name' => "Voluntary at employee cost"],
            ['name' => "Voluntary at shared cost"],
            ['name' => "Voluntary at employer cost"]
        ];

        DB::table('participant_criterias')->insert($records);
    }
}
