<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Travel;

class TravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 3; $i++) { 
            $new_travel = new Travel();
            $new_travel->start_trip = $faker->date();
            $new_travel->city1 = $faker->words(2, true);
            $new_travel->city2 = $faker->words(2, true);
            $new_travel->price= $faker->randomFloat(2,0,500);
            $new_travel->save();
        }
    }
}
