<?php

use Illuminate\Database\Seeder;
use App\Models\Travel;

class TravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $travels = [
            [
                'city1' => 'Bologna',
                'city2' => 'Milano',
                'start_trip' => '2022-10-06 21:30:45',
                'photo' => null,
                'price' => null,
            ],
            [
                'city1' => 'Firenze',
                'city2' => 'Thailandia',
                'start_trip' => '2022-03-17 11:30:45',
                'photo' => null,
                'price' => null,
            ],
            [
                'city1' => 'Genoa',
                'city2' => 'Cuba',
                'start_trip' => '2022-04-11 10:30:45',
                'photo' => null,
                'price' => null,
            ],
            [
                'city1' => 'Pescara',
                'city2' => 'Maldive',
                'start_trip' => '2022-05-06 10:30:45',
                'photo' => null,
                'price' => null,
            ],
            [
                'city1' => 'Milano',
                'city2' => 'Parigi',
                'start_trip' => '2022-06-10 21:30:45',
                'photo' => null,
                'price' => null,
            ],
        ];

        foreach ($travels as $item){
            $_item = new Travel();
            $_item->city1 = $item['city1'];
            $_item->city2 = $item['city1'];
            $_item->start_trip = $item['start_trip'];
            $_item->photo = $item['photo'];
            $_item->price = $item['price'];
            $_item-> save();
        }
    }
}
