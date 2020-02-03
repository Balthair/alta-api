<?php

use Illuminate\Database\Seeder;

class EmployeeClassSeeder extends Seeder
{
    public function run() {
        DB::table('employee_classes')->delete();

        $records = [
            ['name' => "Senior Executives"],
            ['name' => "Executives"],
            ['name' => "Middle Managers"],
            ['name' => "Professional Staff"],
            ['name' => "Sales Staff"],
            ['name' => "Salaried Support Staff"],
            ['name' => "Hourly Workers"],
            ['name' => "Other"]
        ];

        DB::table('employee_classes')->insert($records);
    }
}
