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
                'photo' => 'https://api.viaggiart.com/resources/images/xl/list/image/23955-5efddb4ef9a15d32c6b9fa1de66adf98-1502329562.jpg',
                'price' => 200,
            ],
            [
                'city1' => 'Bologna',
                'city2' => 'Thailandia',
                'start_trip' => '2022-03-17 11:30:45',
                'photo' => 'http://viaggioinasia.com/wp-content/uploads/2019/10/viaggio-in-thailandia-viaggioinasia.jpg',
                'price' => 500.90,
            ],
            [
                'city1' => 'Bologna',
                'city2' => 'Cuba',
                'start_trip' => '2022-04-11 10:30:45',
                'photo' => 'https://cdn.ttgitalia.com/media/2018/11/27584_177_medium.jpg',
                'price' => 300,
            ],
            [
                'city1' => 'Bologna',
                'city2' => 'Maldive',
                'start_trip' => '2022-05-06 10:30:45',
                'photo' => 'https://cdn.ttgitalia.com/media/2019/06/29086_8_medium.jpg',
                'price' => 300,
            ],
            [
                'city1' => 'Bologna',
                'city2' => 'Parigi',
                'start_trip' => '2022-06-10 21:30:45',
                'photo' => 'https://www.tripvillage.it/wp-content/uploads/2019/04/duegiorniaparigi-33.jpg',
                'price' => 250,
            ],
        ];

        foreach ($travels as $item){
            $_item = new Travel();
            $_item->city1 = $item['city1'];
            $_item->city2 = $item['city2'];
            $_item->start_trip = $item['start_trip'];
            $_item->photo = $item['photo'];
            $_item->price = $item['price'];
            $_item-> save();
        }
    }
}
