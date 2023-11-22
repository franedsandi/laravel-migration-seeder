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
            $train->azienda = $faker->company();
            $train->stazione_di_partenza = $faker->state();
            $train->stazione_di_arrivo = $faker->state();
            $train->orario_di_partenza = $faker->time();
            $train->orario_di_arrivo = $faker->time();
            $train->codice_treno = $faker->numberBetween(0, 999999);
            $train->numero_carrozze = $faker->numberBetween(0, 12);
            $train->save();
        }
    }
}
