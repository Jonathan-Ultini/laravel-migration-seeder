<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ticket;
use App\Models\Passenger;
use App\Models\Train;
use Faker\Factory as Faker;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $passengers = Passenger::all();
        $trains = Train::all();

        foreach ($passengers as $passenger) {
            foreach ($trains as $train) {
                Ticket::create([
                    'passenger_id' => $passenger->id,
                    'train_id' => $train->id,
                    'price' => $faker->randomFloat(2, 10, 100),
                    'seat_number' => $faker->numberBetween(1, 100),
                ]);
            }
        }
    }
}
