<?php

use Illuminate\Database\Seeder;

class HealthDeliveryVehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('health_delivery_vehicles')->delete();

        $records = [
            ['name' => "Free choice"],
            ['name' => "Network medical provider"],
            ['name' => "Non-network medical provider"],
            ['name' => "Company clinic"],
            ['name' => "Virtual consultations"]
        ];

        DB::table('health_delivery_vehicles')->insert($records);
    }
}
