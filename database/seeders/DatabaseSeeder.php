<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $books = [
            ['name' => 'Cuddles and Dreams', 'code' => '0M', 'cover' => 'storage/covers/0M-cover.jpg'],
            ['name' => 'A Snail with Huge Eyes', 'code' => '0M1', 'cover' => 'storage/covers/0M1-cover.jpg'],
            ['name' => 'People on the Rock', 'code' => '0M2', 'cover' => 'storage/covers/0M2-cover.jpg'],
            ['name' => 'Just a Slow Squid', 'code' => '0M3', 'cover' => 'storage/covers/0M3-cover.jpg'],
            ['name' => 'The Baby Sees Love', 'code' => '0M4', 'cover' => 'storage/covers/0M4-cover.jpg'],
            ['name' => 'Armando', 'code' => 'ARM', 'cover' => 'storage/covers/ARM-cover.jpg'],
            ['name' => 'Early Literacy Collection', 'code' => 'B', 'cover' => 'storage/covers/B-cover.jpg'],
            ['name' => 'Sunflower', 'code' => 'B1', 'cover' => 'storage/covers/B1-cover.jpg'],
            ['name' => 'Dragon Girl', 'code' => 'B2', 'cover' => 'storage/covers/B2-cover.jpg'],
            ['name' => 'Ma Ma Ma Mammoth', 'code' => 'B3', 'cover' => 'storage/covers/B3-cover.jpg'],
 
            ['name' => 'Little Boat', 'code' => 'B4', 'cover' => 'storage/covers/B4-cover.jpg'],
            ['name' => 'Good Night, Fish', 'code' => 'B5', 'cover' => 'storage/covers/B5-cover.jpg'],
            ['name' => 'Good Night, Poo', 'code' => 'B6', 'cover' => 'storage/covers/B6-cover.jpg'],
            ['name' => 'Inside Their Bodies: Next Level Unlocked!', 'code' => 'BODY', 'cover' => 'storage/covers/BODY-cover.jpg'],
            ['name' => 'Crawl Stars: In Search of the Dream Pass', 'code' => 'CRAWL', 'cover' => 'storage/covers/CRAWL-cover.jpg'],
            ['name' => 'Dinosasters', 'code' => 'DINO', 'cover' => 'storage/covers/DINO-cover.jpg'],
            ['name' => 'The Weird Jungle Ball', 'code' => 'DINO1', 'cover' => 'storage/covers/DINO1-cover.jpg'],
            ['name' => 'The House in The Tree Village', 'code' => 'DINO10', 'cover' => 'storage/covers/DINO10-cover.jpg'],
            ['name' => 'The Volcanic Lunch', 'code' => 'DINO11', 'cover' => 'storage/covers/DINO11-cover.jpg'],
            ['name' => 'The Sleepy Meteor', 'code' => 'DINO12', 'cover' => 'storage/covers/DINO12-cover.jpg'],
 
            ['name' => 'Stuck in the Savannah', 'code' => 'DINO13', 'cover' => 'storage/covers/DINO13-cover.jpg'],
            ['name' => 'The Underground Treasure Map', 'code' => 'DINO14', 'cover' => 'storage/covers/DINO14-cover.jpg'],
            ['name' => 'The Mysterious Farm Egg', 'code' => 'DINO15', 'cover' => 'storage/covers/DINO15-cover.jpg'],
            ['name' => 'The Slippery Valley', 'code' => 'DINO16', 'cover' => 'storage/covers/DINO16-cover.jpg'],
            ['name' => 'The Unstoppable Hot Springs', 'code' => 'DINO17', 'cover' => 'storage/covers/DINO17-cover.jpg'],
            ['name' => 'The Canyon of Shining Shadows', 'code' => 'DINO18', 'cover' => 'storage/covers/DINO18-cover.jpg'],
            ['name' => 'The Noisy Ruins', 'code' => 'DINO19', 'cover' => 'storage/covers/DINO19-cover.jpg'],
            ['name' => 'The Missing Breakfast', 'code' => 'DINO2', 'cover' => 'storage/covers/DINO2-cover.jpg'],
            ['name' => 'The Cactus Statues', 'code' => 'DINO20', 'cover' => 'storage/covers/DINO20-cover.jpg'],
            ['name' => 'The Shiny Crystal Mystery', 'code' => 'DINO3', 'cover' => 'storage/covers/DINO3-cover.jpg'],
 
            ['name' => 'The Jumping Beach Platform', 'code' => 'DINO4', 'cover' => 'storage/covers/DINO4-cover.jpg'],
            ['name' => 'A Fishing Mess', 'code' => 'DINO5', 'cover' => 'storage/covers/DINO5-cover.jpg'],
            ['name' => 'Disaster Island', 'code' => 'DINO6', 'cover' => 'storage/covers/DINO6-cover.jpg'],
            ['name' => 'The Bubble Battle', 'code' => 'DINO7', 'cover' => 'storage/covers/DINO7-cover.jpg'],
            ['name' => 'How Did We Get to the Moon?', 'code' => 'DINO8', 'cover' => 'storage/covers/DINO8-cover.jpg'],
            ['name' => 'Looking for the Snow Dino', 'code' => 'DINO9', 'cover' => 'storage/covers/DINO9-cover.jpg'],
            ['name' => 'The Robin Expedition', 'code' => 'EXP', 'cover' => 'storage/covers/EXP-cover.jpg'],
            ['name' => 'Collection of Classic Fables', 'code' => 'F', 'cover' => 'storage/covers/F-cover.jpg'],
            ['name' => 'The Hare and the Tortoise', 'code' => 'F1', 'cover' => 'storage/covers/F1-cover.jpg'],
            ['name' => 'The Lion and the Mouse', 'code' => 'F2', 'cover' => 'storage/covers/F2-cover.jpg'],
 
            ['name' => 'The Grasshopper and the Ant', 'code' => 'F3', 'cover' => 'storage/covers/F3-cover.jpg'],
            ['name' => 'The Fox and the Crow', 'code' => 'F4', 'cover' => 'storage/covers/F4-cover.jpg'],
            ['name' => 'The Eagle and the Tortoise', 'code' => 'F5', 'cover' => 'storage/covers/F5-cover.jpg'],
            ['name' => 'If I Were…', 'code' => 'FUERA', 'cover' => 'storage/covers/FUERA-cover.jpg'],
            ['name' => 'Lara Cruz and the Lost Ship', 'code' => 'G1', 'cover' => 'storage/covers/G1-cover.jpg'],
            ['name' => 'The Day Gorp Got Shrunk', 'code' => 'GORP', 'cover' => 'storage/covers/GORP-cover.jpg'],
            ['name' => 'Greta', 'code' => 'GRETA', 'cover' => 'storage/covers/GRETA-cover.jpg'],
            ['name' => 'Being a Fairy Gone Wrong', 'code' => 'HADA', 'cover' => 'storage/covers/HADA-cover.jpg'],
            ['name' => 'Where Is My Home?', 'code' => 'HOME', 'cover' => 'storage/covers/HOME-cover.jpg'],
            ['name' => 'Hugo the Pirate', 'code' => 'HUGO', 'cover' => 'storage/covers/HUGO-cover.jpg'],
 
            ['name' => 'Hugo the Pirate and His Fear of Swimming', 'code' => 'HUGO1', 'cover' => 'storage/covers/HUGO1-cover.jpg'],
            ['name' => 'Hugo the Pirate and the Monkey King', 'code' => 'HUGO2', 'cover' => 'storage/covers/HUGO2-cover.jpg'],
            ['name' => 'The Perfect Toy', 'code' => 'JUG', 'cover' => 'storage/covers/JUG-cover.jpg'],
            ['name' => 'How I Swallowed Mummy', 'code' => 'MAMA', 'cover' => 'storage/covers/MAMA-cover.jpg'],
            ['name' => 'A Tasty Treat', 'code' => 'MANJAR', 'cover' => 'storage/covers/MANJAR-cover.jpg'],
            ['name' => 'The Mixters', 'code' => 'MMIX', 'cover' => 'storage/covers/MMIX-cover.jpg'],
            ['name' => 'A Very Mixed-Up Spell', 'code' => 'MMIX1', 'cover' => 'storage/covers/MMIX1-cover.jpg'],
            ['name' => 'Fixing the Monster Party', 'code' => 'MMIX2', 'cover' => 'storage/covers/MMIX2-cover.jpg'],
            ['name' => 'The Potion Thief', 'code' => 'MMIX3', 'cover' => 'storage/covers/MMIX3-cover.jpg'],
            ['name' => 'The Disappearing Mission', 'code' => 'MMIX4', 'cover' => 'storage/covers/MMIX4-cover.jpg'],
 
            ['name' => 'No Fangs Today', 'code' => 'MMIX5', 'cover' => 'storage/covers/MMIX5-cover.jpg'],
            ['name' => 'These Bandages Are Terrible', 'code' => 'MMIX6', 'cover' => 'storage/covers/MMIX6-cover.jpg'],
            ['name' => 'The Dragon’s Big Trip', 'code' => 'MMIX7', 'cover' => 'storage/covers/MMIX7-cover.jpg'],
            ['name' => 'Chaos in the River', 'code' => 'MMIX8', 'cover' => 'storage/covers/MMIX8-cover.jpg'],
            ['name' => 'Napoleon, the General Without His Pants', 'code' => 'NAPO', 'cover' => 'storage/covers/NAPO-cover.jpg'],
            ['name' => 'The Musical Staff Girl', 'code' => 'NINA', 'cover' => 'storage/covers/NINA-cover.jpg'],
            ['name' => 'The Centipede with 55 Feet', 'code' => 'NUM55', 'cover' => 'storage/covers/NUM55-cover.jpg'],
            ['name' => 'The Ogres Lost Their Voices', 'code' => 'OGR', 'cover' => 'storage/covers/OGR-cover.jpg'],
            ['name' => 'The Caterpillar of Values', 'code' => 'OR', 'cover' => 'storage/covers/OR-cover.jpg'],
            ['name' => 'The Juicy Caterpillar', 'code' => 'OR1', 'cover' => 'storage/covers/OR1-cover.jpg'],
 
            ['name' => 'The Transforming Caterpillar', 'code' => 'OR2', 'cover' => 'storage/covers/OR2-cover.jpg'],
            ['name' => 'The Counting Caterpillar', 'code' => 'OR3', 'cover' => 'storage/covers/OR3-cover.jpg'],
            ['name' => 'OUAH!', 'code' => 'OUAH', 'cover' => 'storage/covers/OUAH-cover.jpg'],
            ['name' => 'The Messenger Dove', 'code' => 'PALO', 'cover' => 'storage/covers/PALO-cover.jpg'],
            ['name' => 'Learning the Flags', 'code' => 'PALO1', 'cover' => 'storage/covers/PALO1-cover.jpg'],
            ['name' => 'World Wonders', 'code' => 'PALO2', 'cover' => 'storage/covers/PALO2-cover.jpg'],
            ['name' => 'Polly the Little Witch and the Mysterious Frog', 'code' => 'PAU1', 'cover' => 'storage/covers/PAU1-cover.jpg'],
            ['name' => 'Pete, the Seagull Pilot', 'code' => 'PEDRO', 'cover' => 'storage/covers/PEDRO-cover.jpg'],
            ['name' => 'The Sticker Planet', 'code' => 'PEG', 'cover' => 'storage/covers/PEG-cover.jpg'],
            ['name' => 'Insects and Bugs', 'code' => 'PEG1', 'cover' => 'storage/covers/PEG1-cover.jpg'],
 
            ['name' => 'Forest Animals', 'code' => 'PEG2', 'cover' => 'storage/covers/PEG2-cover.jpg'],
            ['name' => 'Farm Animals', 'code' => 'PEG3', 'cover' => 'storage/covers/PEG3-cover.jpg'],
            ['name' => 'Savannah Animals', 'code' => 'PEG4', 'cover' => 'storage/covers/PEG4-cover.jpg'],
            ['name' => 'Birds of the World', 'code' => 'PEG5', 'cover' => 'storage/covers/PEG5-cover.jpg'],
            ['name' => 'Sea Creatures', 'code' => 'PEG6', 'cover' => 'storage/covers/PEG6-cover.jpg'],
            ['name' => 'Fuzzy the Ostrich', 'code' => 'PELUZ', 'cover' => 'storage/covers/PELUZ-cover.jpg'],
            ['name' => 'Fuzzy the Ostrich Doesn’t Want to Be Small', 'code' => 'PELUZ1', 'cover' => 'storage/covers/PELUZ1-cover.jpg'],
            ['name' => 'Fuzzy the Ostrich Doesn’t Want to Go to the Doctor', 'code' => 'PELUZ2', 'cover' => 'storage/covers/PELUZ2-cover.jpg'],
            ['name' => 'Fuzzy the Ostrich Doesn’t Want to Perform in Public', 'code' => 'PELUZ3', 'cover' => 'storage/covers/PELUZ3-cover.jpg'],
            ['name' => 'When the Fish Grew a Beard', 'code' => 'PEZ', 'cover' => 'storage/covers/PEZ-cover.jpg'],
 
            ['name' => 'Plumaria: The Flight School', 'code' => 'PLU', 'cover' => 'storage/covers/PLU-cover.jpg'],
            ['name' => 'The Missing Yarn', 'code' => 'PUM', 'cover' => 'storage/covers/PUM-cover.jpg'],
            ['name' => 'Piece by Piece', 'code' => 'PUZL', 'cover' => 'storage/covers/PUZL-cover.jpg'],
            ['name' => 'Piece by Piece: Where Do They Travel?', 'code' => 'PUZL1', 'cover' => 'storage/covers/PUZL1-cover.jpg'],
            ['name' => 'Piece by Piece: Where Do They Work?', 'code' => 'PUZL2', 'cover' => 'storage/covers/PUZL2-cover.jpg'],
            ['name' => 'The Funny Bird', 'code' => 'R', 'cover' => 'storage/covers/R-cover.jpg'],
            ['name' => 'Catch That Giggle!', 'code' => 'RISA', 'cover' => 'storage/covers/RISA-cover.jpg'],
            ['name' => 'The Trash Robots', 'code' => 'ROB', 'cover' => 'storage/covers/ROB-cover.jpg'],
            ['name' => 'Briar Rose', 'code' => 'ROS', 'cover' => 'storage/covers/ROS-cover.jpg'],
            ['name' => 'Rulli\'s Happiness', 'code' => 'RULI', 'cover' => 'storage/covers/RULI-cover.jpg'],
 
            ['name' => 'The Skunk with the Lollipop Smell', 'code' => 'SKUNK', 'cover' => 'storage/covers/SKUNK-cover.jpg'],
            ['name' => 'Green Square', 'code' => 'SPIN1', 'cover' => 'storage/covers/SPIN1-cover.jpg'],
            ['name' => 'Office of Wishes', 'code' => 'STAR', 'cover' => 'storage/covers/STAR-cover.jpg'],
            ['name' => 'The Tapir Who Had No Friends', 'code' => 'TAPIR', 'cover' => 'storage/covers/TAPIR-cover.jpg'],
            ['name' => 'Terrachroma', 'code' => 'TERRA', 'cover' => 'storage/covers/TERRA-cover.jpg'],
            ['name' => 'The Power of the Rainbow Kids', 'code' => 'TERRA1', 'cover' => 'storage/covers/TERRA1-cover.jpg'],
            ['name' => 'The Dragocorn Awakens', 'code' => 'TERRA2', 'cover' => 'storage/covers/TERRA2-cover.jpg'],
            ['name' => 'The Elixir of Identity', 'code' => 'TERRA3', 'cover' => 'storage/covers/TERRA3-cover.jpg'],
            ['name' => 'Burnt Toast: A Little Story about Big Love', 'code' => 'TOAST', 'cover' => 'storage/covers/TOAST-cover.jpg'],
            ['name' => 'Early Learning Fun', 'code' => 'VERDE', 'cover' => 'storage/covers/VERDE-cover.jpg'],
 
            ['name' => 'Who Bites on the Green Page?', 'code' => 'VERDE1', 'cover' => 'storage/covers/VERDE1-cover.jpg'],
            ['name' => 'Tonight for Dinner... I Want a Hyena!', 'code' => 'VERDE2', 'cover' => 'storage/covers/VERDE2-cover.jpg'],
            ['name' => 'Four Seasons', 'code' => 'VIV', 'cover' => 'storage/covers/VIV-cover.jpg'],
            ['name' => 'Rabbit and Spring', 'code' => 'VIV1', 'cover' => 'storage/covers/VIV1-cover.jpg'],
            ['name' => 'Frog and Summer', 'code' => 'VIV2', 'cover' => 'storage/covers/VIV2-cover.jpg'],
            ['name' => 'Squirrel and Autumn', 'code' => 'VIV3', 'cover' => 'storage/covers/VIV3-cover.jpg'],
            ['name' => 'Mouse and Winter', 'code' => 'VIV4', 'cover' => 'storage/covers/VIV4-cover.jpg'],
            ['name' => 'Who Am I?', 'code' => 'WHO', 'cover' => 'storage/covers/WHO-cover.jpg'],
            ['name' => 'What I Wish For', 'code' => 'WISH', 'cover' => 'storage/covers/WISH-cover.jpg'],
            ['name' => 'The House I Wish For', 'code' => 'WISH1', 'cover' => 'storage/covers/WISH1-cover.jpg'],
 
            ['name' => 'The Friend I Wish For', 'code' => 'WISH2', 'cover' => 'storage/covers/WISH2-cover.jpg'],
        ];
        $allCodes=array_column($books, "code");
        foreach($books as &$book){
            $parent = preg_replace('/\d+$/', '', $book['code']);
            if (in_array($parent, $allCodes) && $parent !== $book['code']) {
                $book += ['parent_code' => $parent];
            }else {
                $book += ['parent_code' => null];
            }
        }
        unset($book);
        foreach ($books as $book) {
            Book::updateOrCreate(['code' => $book['code']], $book);
        }
    }
}
