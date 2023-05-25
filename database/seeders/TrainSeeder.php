<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for ($i=0; $i < 10; $i++) { 
            $train = new Train();
            $train->company = $faker->randomElement(['Italo', 'Trenitalia SPA', 'Frecciarossa']);
            $train->departure_station = $faker->randomElement(['Palermo','Messina', 'Catania', 'Napoli', 'Roma', 'Firenze', 'Milano', 'Torino', 'Genova']);
            $train->arrival_station = $faker->randomElement(['Palermo','Messina', 'Catania', 'Napoli', 'Roma', 'Firenze', 'Milano', 'Torino', 'Genova']);
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->train_code = $faker->randomNumber(5, true);
            $train->total_wagons = $faker->numberBetween(100, 200);
            $train->on_time = $faker->boolean();
            $train->deleted = $faker->boolean();
            $train->save();

        }

    }
}
