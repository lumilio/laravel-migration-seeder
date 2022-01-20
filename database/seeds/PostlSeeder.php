<?php

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'author' => 'Giovanni Beluga',
                'photo' => 'https://www.impiegatagiramondo.it/wp-content/uploads/2020/01/capodanno-alle-maldive.jpg',
                'text' => 'Buone feste !!!',
            ],
            [
                'author' => 'Marco Aurelio',
                'photo' => 'https://www.parigi.it/images/large/tbgc17487_parigiit-guida-di-parigi4.jpeg?v=1da1',
                'text' => '',
            ],
            [
                'author' => 'Diego Rossi',
                'photo' => 'https://i0.wp.com/passporterapp.com/it/blog/wp-content/uploads/2021/04/que-ver-en-cuba.jpg?fit=1994%2C1438&ssl=1',
                'text' => 'eccovi una foto da cuba',
            ],
            [
                'author' => 'Lorenzo Mari',
                'photo' => 'https://mobilita.org/wp-content/uploads/2021/11/parigi.jpg',
                'text' => 'che vacanza straordinaria',
            ],
            [
                'author' => 'Enrico Gualandi',
                'photo' => 'https://scontent.ccdn.cloud/image/vivitravels-it/f9bcee6c-6a01-47ba-b53e-531a76c11170/maxw-960.jpg',
                'text' => 'sono soddisfatto di aver fatto questo viaggio',
            ],
        ];

        foreach ($posts as $item){
            $_item = new Post();
            $_item->author = $item['author'];
            $_item->photo = $item['photo'];
            $_item->text = $item['text'];
            $_item-> save();
        }
    }
}
