<?php

use Illuminate\Database\Seeder;

class PetCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pet_categories')->insert([
            'name' => 'Dog',
            'image' => 'dog.jpg'
        ]);
        DB::table('pet_categories')->insert([
            'name' => 'Cat',
            'image' => 'cat.jpg'
        ]);
        DB::table('pet_categories')->insert([
            'name' => 'Bird',
            'image' => 'bird.jpg'
        ]);
        DB::table('pet_categories')->insert([
            'name' => 'Small Pet',
            'image' => 'hamster.jpg'
        ]);
    }
}
