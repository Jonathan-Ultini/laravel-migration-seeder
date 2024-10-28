<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TrainStation;
use Faker\Factory as Faker;

class TrainStationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            TrainStation::create([
                'name' => $faker->company . ' Station',
                'location' => $faker->city,
            ]);
        }
    }
}
