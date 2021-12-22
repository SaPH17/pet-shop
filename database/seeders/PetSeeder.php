<?php

namespace Database\Seeders;

use App\Models\Pet;
use App\Models\PetCategory;
use Illuminate\Database\Seeder;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = PetCategory::all();
        $list = [];
        foreach($categories as $category){
            $list[$category->name] = $category->id;
        }

            Pet::create([
                'name' => 'Golden Retriever',
                'pet_category_id' => $list['Dog'],
                'price' => 8000000,
                'description' => "The Golden Retriever, an exuberant Scottish gundog of great beauty, stands among America’s most popular dog breeds",
                'image' => 'golden-retriever.jpg',
            ]);
            Pet::create([
                'name' => 'Beagle',
                'pet_category_id' => $list['Dog'],
                'price' => 2500000,
                'description' => "Not only is the Beagle an excellent hunting dog and loyal companion, it is also happy-go-lucky, funny, and—thanks to its pleading expression—cute. They were bred to hunt in packs, so they enjoy company and are generally easygoing.",
                'image' => 'beagle.jpg',
            ]);
            Pet::create([
                'name' => 'German Shepherd',
                'pet_category_id' => $list['Dog'],
                'price' => 11000000,
                'description' => "Generally considered dogkind’s finest all-purpose worker, the German Shepherd Dog is a large, agile, muscular dog of noble character and high intelligence.",
                'image' => 'german-shepherd.jpg',
            ]);
            Pet::create([
                'name' => 'Pomeranian',
                'pet_category_id' => $list['Dog'],
                'price' => 5000000,
                'description' => "The tiny Pomeranian, long a favorite of royals and commoners alike, has been called the ideal companion.",
                'image' => 'pomeranian.jpg',
            ]);
            Pet::create([
                'name' => 'Labrador Retriever',
                'pet_category_id' => $list['Dog'],
                'price' => 4000000,
                'description' => "The sweet-faced, lovable Labrador Retriever is America’s most popular dog breed",
                'image' => 'labrador-retriever.jpg',
            ]);
            Pet::create([
                'name' => 'Poodle',
                'pet_category_id' => $list['Dog'],
                'price' => 7000000,
                'description' => "Whether Standard, Miniature, or Toy, and either black, white, or apricot, the Poodle stands proudly among dogdom’s true aristocrats.",
                'image' => 'poodle.jpg',
            ]);
            Pet::create([
                'name' => 'Siberian Husky',
                'pet_category_id' => $list['Dog'],
                'price' => 4000000,
                'description' => "The Siberian Husky, a thickly coated, compact sled dog of medium size and great endurance, was developed to work in packs, pulling light loads at moderate speeds over vast frozen expanses",
                'image' => 'siberian-husky.jpg',
            ]);
            Pet::create([
                'name' => 'Dalmatian',
                'pet_category_id' => $list['Dog'],
                'price' => 7500000,
                'description' => "The dignified Dalmatian, dogdom's citizen of the world, is famed for his spotted coat and unique job description.",
                'image' => 'dalmatian.jpg',
            ]);
            
            Pet::create([
                'name' => 'Persia',
                'pet_category_id' => $list['Cat'],
                'price' => 2000000,
                'description' => "The Persian cat is a long-haired breed of cat characterized by its round face and short muzzle",
                'image' => 'persian.jpg',
            ]);
            Pet::create([
                'name' => 'Siamese',
                'pet_category_id' => $list['Cat'],
                'price' => 1000000,
                'description' => "The Siamese cat is one of the first distinctly recognized breeds of Asian cat",
                'image' => 'siamese.jpg',
            ]);
            Pet::create([
                'name' => 'Sphynx',
                'pet_category_id' => $list['Cat'],
                'price' => 10000000,
                'description' => "The Sphynx cat is a breed of cat known for its lack of coat. Hairlessness in cats is a naturally occurring genetic mutation",
                'image' => 'sphynx.jpg',
            ]);
            Pet::create([
                'name' => 'Scottish Fold',
                'pet_category_id' => $list['Cat'],
                'price' => 6000000,
                'description' => "The Scottish Fold is a breed of domestic cat with a natural dominant-gene mutation that affects cartilage throughout the body",
                'image' => 'scottish-fold.jpg',
            ]);
            Pet::create([
                'name' => 'Ragdoll',
                'pet_category_id' => $list['Cat'],
                'price' => 5000000,
                'description' => "The Ragdoll is a cat breed with a color point coat and blue eyes",
                'image' => 'ragdoll.jpg',
            ]);
            Pet::create([
                'name' => 'Bengal',
                'pet_category_id' => $list['Cat'],
                'price' => 6000000,
                'description' => "The Bengal cat is a domesticated cat breed created from hybrids of domestic cats",
                'image' => 'bengal.jpg',
            ]);
            Pet::create([
                'name' => 'Birman',
                'pet_category_id' => $list['Cat'],
                'price' => 1500000,
                'description' => "The Birman, also called the \"Sacred Cat of Burma\", is a domestic cat breed",
                'image' => 'birman.jpg',
            ]);
            Pet::create([
                'name' => 'Siberian',
                'pet_category_id' => $list['Cat'],
                'price' => 3000000,
                'description' => "The Siberian is a centuries-old landrace of domestic cat in Russia",
                'image' => 'siberian.jpg',
            ]);
            Pet::create([
                'name' => 'Parrot',
                'pet_category_id' => $list['Bird'],
                'price' => 2000000,
                'description' => "Parrots, also known as psittacines, are birds of the roughly 393 species in 92 genera comprising the order Psittaciformes",
                'image' => 'parrot.jpg',
            ]);
            Pet::create([
                'name' => 'Owl',
                'pet_category_id' => $list['Bird'],
                'price' => 500000,
                'description' => "Owls are birds from the order Strigiformes, which includes over 200 species of mostly solitary and nocturnal birds of prey",
                'image' => 'owl.jpg',
            ]);
            Pet::create([
                'name' => 'Hummingbird',
                'pet_category_id' => $list['Bird'],
                'price' => 1000000,
                'description' => "Hummingbirds are birds native to the Americas and constituting the biological family Trochilidae",
                'image' => 'hummingbird.jpg',
            ]);
            Pet::create([
                'name' => 'Lovebird',
                'pet_category_id' => $list['Bird'],
                'price' => 400000,
                'description' => "Lovebird is the common name of Agapornis, a small genus of parrot",
                'image' => 'lovebird.jpg',
            ]);
            Pet::create([
                'name' => 'Canary',
                'pet_category_id' => $list['Bird'],
                'price' => 500000,
                'description' => "The domestic canary, often simply known as the canary, is a domesticated form of the wild canary,",
                'image' => 'canary.jpg',
            ]);
            Pet::create([
                'name' => 'Rosella',
                'pet_category_id' => $list['Bird'],
                'price' => 7000000,
                'description' => "Rosellas are in a genus that consists of six species and nineteen subspecies",
                'image' => 'rosella.jpg',
            ]);
            Pet::create([
                'name' => 'Parrotlet',
                'pet_category_id' => $list['Bird'],
                'price' => 1500000,
                'description' => "Parrotlets are a group of the smallest New World parrot species, comprising several genera",
                'image' => 'parrotlet.jpg',
            ]);
            Pet::create([
                'name' => 'Dove',
                'pet_category_id' => $list['Bird'],
                'price' => 1000000,
                'description' => "Doves are ideal for someone who wants a bird, but cannot accommodate the needs of a parrot",
                'image' => 'dove.jpg',
            ]);
            Pet::create([
                'name' => 'Golden Hamster',
                'pet_category_id' => $list['Small Pet'],
                'price' => 25000,
                'description' => "The golden or Syrian hamster is a rodent belonging to the hamster subfamily, Cricetinae",
                'image' => 'golden-hamster.jpg',
            ]);
            Pet::create([
                'name' => 'Chinese Hamster',
                'pet_category_id' => $list['Small Pet'],
                'price' => 50000,
                'description' => "Chinese hamsters are small rodents with a grayish black coat and a black dorsal stripe.",
                'image' => 'chinese-hamster.jpg',
            ]);
            Pet::create([
                'name' => 'European Hamster',
                'pet_category_id' => $list['Small Pet'],
                'price' => 70000,
                'description' => "The European hamster, also known as the Eurasian hamster, black-bellied hamster or common hamster",
                'image' => 'european-hamster.jpg',
            ]);
            Pet::create([
                'name' => 'American Guinea Pig',
                'pet_category_id' => $list['Small Pet'],
                'price' => 70000,
                'description' => "The American guinea pig’s fur is straight and the breed comes in a variety of colors",
                'image' => 'american-guinea-pig.jpg',
            ]);
            Pet::create([
                'name' => 'Himalayan Guinea Pig',
                'pet_category_id' => $list['Small Pet'],
                'price' => 60000,
                'description' => "Himalayan Guinea Pigs are an albino guinea pig variety. The fuzzy little creature is born with red eyes, and fur that is uniformly white",
                'image' => 'himalayan-guinea-pig.jpg',
            ]);
            Pet::create([
                'name' => 'Winter White Dwarf Hamster',
                'pet_category_id' => $list['Small Pet'],
                'price' => 8000,
                'description' => "The Winter white dwarf hamster, also known as the Russian dwarf hamster",
                'image' => 'winter-white-dwarf-hamster.jpg',
            ]);
            Pet::create([
                'name' => 'Grey Dwarf Hamster',
                'pet_category_id' => $list['Small Pet'],
                'price' => 80000,
                'description' => "Dwarf hamsters are actually several tiny species of hamsters that are native primarily to desert regions around the world",
                'image' => 'grey-dwarf-hamster.jpg',
            ]);
            Pet::create([
                'name' => 'Campbells Dwarf Hamster',
                'pet_category_id' => $list['Small Pet'],
                'price' => 50000,
                'description' => "Campbell's dwarf Russian hamsters are small round-bodied hamsters that make affectionate pets",
                'image' => 'campbell-dwarf-hamster.jpg',
            ]);
    }
}
