<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pets')->insert([
            'name' => 'Golden Retriever',
            'category_id' => 1,
            'price' => 8000000,
            'description' => "The Golden Retriever, an exuberant Scottish gundog of great beauty, stands among America’s most popular dog breeds",
            'image' => 'golden-retriever.jpg',
        ]);
        DB::table('pets')->insert([
            'name' => 'Beagle',
            'category_id' => 1,
            'price' => 2500000,
            'description' => "Not only is the Beagle an excellent hunting dog and loyal companion, it is also happy-go-lucky, funny, and—thanks to its pleading expression—cute. They were bred to hunt in packs, so they enjoy company and are generally easygoing.",
            'image' => 'beagle.jpg',
        ]);
        DB::table('pets')->insert([
            'name' => 'German Shepherd',
            'category_id' => 1,
            'price' => 11000000,
            'description' => "Generally considered dogkind’s finest all-purpose worker, the German Shepherd Dog is a large, agile, muscular dog of noble character and high intelligence.",
            'image' => 'german-shepherd.jpg',
        ]);
        DB::table('pets')->insert([
            'name' => 'Pomeranian',
            'category_id' => 1,
            'price' => 5000000,
            'description' => "The tiny Pomeranian, long a favorite of royals and commoners alike, has been called the ideal companion.",
            'image' => 'pomeranian.jpg',
        ]);
        DB::table('pets')->insert([
            'name' => 'Labrador Retriever',
            'category_id' => 1,
            'price' => 4000000,
            'description' => "The sweet-faced, lovable Labrador Retriever is America’s most popular dog breed",
            'image' => 'labrador-retriever.jpg',
        ]);
        DB::table('pets')->insert([
            'name' => 'Poodle',
            'category_id' => 1,
            'price' => 7000000,
            'description' => "Whether Standard, Miniature, or Toy, and either black, white, or apricot, the Poodle stands proudly among dogdom’s true aristocrats.",
            'image' => 'poodle.jpg',
        ]);
        DB::table('pets')->insert([
            'name' => 'Siberian Husky',
            'category_id' => 1,
            'price' => 4000000,
            'description' => "The Siberian Husky, a thickly coated, compact sled dog of medium size and great endurance, was developed to work in packs, pulling light loads at moderate speeds over vast frozen expanses",
            'image' => 'siberian-husky.jpg',
        ]);
        DB::table('pets')->insert([
            'name' => 'Dalmatian',
            'category_id' => 1,
            'price' => 7500000,
            'description' => "The dignified Dalmatian, dogdom's citizen of the world, is famed for his spotted coat and unique job description.",
            'image' => 'dalmatian.jpg',
        ]);
        DB::table('pets')->insert([
            'name' => 'Persia',
            'category_id' => 2,
            'price' => 2000000,
            'description' => "The Persian cat is a long-haired breed of cat characterized by its round face and short muzzle",
            'image' => 'persian.jpg',
        ]);
        DB::table('pets')->insert([
            'name' => 'Siamese',
            'category_id' => 2,
            'price' => 1000000,
            'description' => "The Siamese cat is one of the first distinctly recognized breeds of Asian cat",
            'image' => 'siamese.jpg',
        ]);
        DB::table('pets')->insert([
            'name' => 'Sphynx',
            'category_id' => 2,
            'price' => 10000000,
            'description' => "The Sphynx cat is a breed of cat known for its lack of coat. Hairlessness in cats is a naturally occurring genetic mutation",
            'image' => 'sphynx.jpg',
        ]);
        DB::table('pets')->insert([
            'name' => 'Scottish Fold',
            'category_id' => 2,
            'price' => 6000000,
            'description' => "The Scottish Fold is a breed of domestic cat with a natural dominant-gene mutation that affects cartilage throughout the body",
            'image' => 'scottish-fold.jpg',
        ]);
        DB::table('pets')->insert([
            'name' => 'Ragdoll',
            'category_id' => 2,
            'price' => 5000000,
            'description' => "The Ragdoll is a cat breed with a color point coat and blue eyes",
            'image' => 'ragdoll.jpg',
        ]);
        DB::table('pets')->insert([
            'name' => 'Bengal',
            'category_id' => 2,
            'price' => 6000000,
            'description' => "The Bengal cat is a domesticated cat breed created from hybrids of domestic cats",
            'image' => 'bengal.jpg',
        ]);
        DB::table('pets')->insert([
            'name' => 'Birman',
            'category_id' => 2,
            'price' => 1500000,
            'description' => "The Birman, also called the \"Sacred Cat of Burma\", is a domestic cat breed",
            'image' => 'birman.jpg',
        ]);
        DB::table('pets')->insert([
            'name' => 'Siberian',
            'category_id' => 2,
            'price' => 3000000,
            'description' => "The Siberian is a centuries-old landrace of domestic cat in Russia",
            'image' => 'siberian.jpg',
        ]);
        DB::table('pets')->insert([
            'name' => 'Parrot',
            'category_id' => 3,
            'price' => 2000000,
            'description' => "Parrots, also known as psittacines, are birds of the roughly 393 species in 92 genera comprising the order Psittaciformes",
            'image' => 'parrot.jpg',
        ]);
        DB::table('pets')->insert([
            'name' => 'Owl',
            'category_id' => 3,
            'price' => 500000,
            'description' => "Owls are birds from the order Strigiformes, which includes over 200 species of mostly solitary and nocturnal birds of prey",
            'image' => 'owl.jpg',
        ]);
        DB::table('pets')->insert([
            'name' => 'Hummingbird',
            'category_id' => 3,
            'price' => 1000000,
            'description' => "Hummingbirds are birds native to the Americas and constituting the biological family Trochilidae",
            'image' => 'hummingbird.jpg',
        ]);
        DB::table('pets')->insert([
            'name' => 'Lovebird',
            'category_id' => 3,
            'price' => 400000,
            'description' => "Lovebird is the common name of Agapornis, a small genus of parrot",
            'image' => 'lovebird.jpg',
        ]);
        DB::table('pets')->insert([
            'name' => 'Canary',
            'category_id' => 3,
            'price' => 500000,
            'description' => "The domestic canary, often simply known as the canary, is a domesticated form of the wild canary,",
            'image' => 'canary.jpg',
        ]);
        DB::table('pets')->insert([
            'name' => 'Rosella',
            'category_id' => 3,
            'price' => 7000000,
            'description' => "Rosellas are in a genus that consists of six species and nineteen subspecies",
            'image' => 'rosella.jpg',
        ]);
        DB::table('pets')->insert([
            'name' => 'Parrotlet',
            'category_id' => 3,
            'price' => 1500000,
            'description' => "Parrotlets are a group of the smallest New World parrot species, comprising several genera",
            'image' => 'parrotlet.jpg',
        ]);
        DB::table('pets')->insert([
            'name' => 'Dove',
            'category_id' => 3,
            'price' => 1000000,
            'description' => "Doves are ideal for someone who wants a bird, but cannot accommodate the needs of a parrot",
            'image' => 'dove.jpg',
        ]);
        DB::table('pets')->insert([
            'name' => 'Golden Hamster',
            'category_id' => 4,
            'price' => 25000,
            'description' => "The golden or Syrian hamster is a rodent belonging to the hamster subfamily, Cricetinae",
            'image' => 'golden-hamster.jpg',
        ]);
        DB::table('pets')->insert([
            'name' => 'Chinese Hamster',
            'category_id' => 4,
            'price' => 50000,
            'description' => "Chinese hamsters are small rodents with a grayish black coat and a black dorsal stripe.",
            'image' => 'chinese-hamster.jpg',
        ]);
        DB::table('pets')->insert([
            'name' => 'European Hamster',
            'category_id' => 4,
            'price' => 70000,
            'description' => "The European hamster, also known as the Eurasian hamster, black-bellied hamster or common hamster",
            'image' => 'european-hamster.jpg',
        ]);
        DB::table('pets')->insert([
            'name' => 'American Guinea Pig',
            'category_id' => 4,
            'price' => 70000,
            'description' => "The American guinea pig’s fur is straight and the breed comes in a variety of colors",
            'image' => 'american-guinea-pig.jpg',
        ]);
        DB::table('pets')->insert([
            'name' => 'Himalayan Guinea Pig',
            'category_id' => 4,
            'price' => 60000,
            'description' => "Himalayan Guinea Pigs are an albino guinea pig variety. The fuzzy little creature is born with red eyes, and fur that is uniformly white",
            'image' => 'himalayan-guinea-pig.jpg',
        ]);
        DB::table('pets')->insert([
            'name' => 'Winter White Dwarf Hamster',
            'category_id' => 4,
            'price' => 8000,
            'description' => "The Winter white dwarf hamster, also known as the Russian dwarf hamster",
            'image' => 'winter-white-dwarf-hamster.jpg',
        ]);
        DB::table('pets')->insert([
            'name' => 'Grey Dwarf Hamster',
            'category_id' => 4,
            'price' => 80000,
            'description' => "Dwarf hamsters are actually several tiny species of hamsters that are native primarily to desert regions around the world",
            'image' => 'grey-dwarf-hamster.jpg',
        ]);
        DB::table('pets')->insert([
            'name' => 'Campbells Dwarf Hamster',
            'category_id' => 4,
            'price' => 50000,
            'description' => "Campbell's dwarf Russian hamsters are small round-bodied hamsters that make affectionate pets",
            'image' => 'campbell-dwarf-hamster.jpg',
        ]);

    }
}
