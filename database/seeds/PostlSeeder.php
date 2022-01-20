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
                'photo' => '',
                'text' => '',
            ],
            [
                'author' => 'Marco Aurelio',
                'photo' => '',
                'text' => '',
            ],
            [
                'author' => 'Diego Rossi',
                'photo' => '',
                'text' => '',
            ],
            [
                'author' => 'Lorenzo Mari',
                'photo' => '',
                'text' => '',
            ],
            [
                'author' => 'Enrico Gualandi',
                'photo' => '',
                'text' => '',
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
