<?php

use Illuminate\Database\Seeder;

class ParticipantTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('participant_types')->delete();

        $records = [
            ['name' => "Employee"],
            ['name' => "Spouse"],
            ['name' => "Partner"],
            ['name' => "Child"],
            ['name' => "Parent"],
            ['name' => "Extended Family Member"]
        ];

        DB::table('participant_types')->insert($records);
    }
}
