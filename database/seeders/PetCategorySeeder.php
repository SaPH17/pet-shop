<?php

namespace Database\Seeders;

use App\Models\PetCategory;
use Illuminate\Database\Seeder;

class PetCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PetCategory::insert([
            [
                'name' => 'Dog',
                'image' => 'dog.jpg'
            ],
            [
                'name' => 'Cat',
                'image' => 'cat.jpg'
            ],
            [
                'name' => 'Bird',
                'image' => 'bird.jpg'
            ],
            [
                'name' => 'Small Pet',
                'image' => 'hamster.jpg'
            ]
        ]);
    }
}
