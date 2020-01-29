<?php

use App\Comic;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //

        for($i = 0; $i<10; $i++){

            $data = [
                "title" => $faker -> sentence($nbWords = 3, $variableNbWords = true),
                "author" => $faker -> lastName,
                "year" =>  $faker -> year($max = 'now'),
                "review" => $faker -> paragraph($nbSentences = 3, $variableNbSentences = true),
                "vote" => $faker -> randomFloat($nbMaxDecimals = 1, $min = 1, $max = 10)
            ];

            $comic = new Comic;
            $comic -> fill($data);
            $comic -> save();
        }
    }
}
