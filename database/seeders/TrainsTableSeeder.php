<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Train;
use Faker\Generator as Faker;
use Faker\Provider\it_IT;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10 ;$i++){
            $train = new Train();
            $train->company = $faker->company();
            $train->departure_station = $faker->state();
            $train->arrival_station = $faker->state();
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->train_code = $faker->numberBetween(0, 999999);
            $train->wagons_number = $faker->numberBetween(0, 12);
            $train->save();
        }
    }
}
