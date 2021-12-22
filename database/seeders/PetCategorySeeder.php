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
        PetCategory::create([
            'name' => 'Dog',
            'image' => 'dog.jpg'
        ]);
        PetCategory::create([
            'name' => 'Cat',
            'image' => 'cat.jpg'
        ]);
        PetCategory::create([
            'name' => 'Bird',
            'image' => 'bird.jpg'
        ]);
        PetCategory::create([
            'name' => 'Small Pet',
            'image' => 'hamster.jpg'
        ]);
    }
}
