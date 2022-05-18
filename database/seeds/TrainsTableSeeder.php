<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train;


class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) { 
            $newTrain = new Train();
            $newTrain->company = $faker->word(50);
            $newTrain->departure_station = $faker->word(50);
            $newTrain->destination_station = $faker->word(50);
            $newTrain->departure_time = $faker->dateTime();
            $newTrain->arrival_time = $faker->dateTime();
            $newTrain->train_code = $faker->unique()->randomNumber(4, false);
            $newTrain->number_carriage = $faker->randomNumber(2,false);
            $newTrain->in_time = $faker->boolean();
            $newTrain->canceled = $faker->boolean();
            $newTrain->save();
        }
    }
}
