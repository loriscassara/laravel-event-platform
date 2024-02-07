<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            [
                'name' => 'animation',
            ],
            [
                'name' => 'adventure',
            ],
            [
                'name' => 'comic',
            ],
            [
                'name' => 'comedy',
            ],
            [
                'name' => 'dramatic',
            ],
            [
                'name' => 'biographical',
            ],
        ];

        foreach ($tags as $tag) {
            $newTag = new Tag();
            $newTag->fill($tag);
            $newTag->save();
        }
    }
}