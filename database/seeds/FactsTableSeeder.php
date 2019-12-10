<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class FactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

            $facts = DB::table('tpdeux_laravel')->count();

            $texteJson = file_get_contents("cat-facts.json");
            $facts = json_decode($texteJson, true);

            foreach($facts as $fact) {
                DB::table('tpdeux_laravel')->insert([
                    'title'=> $fact["title"],
                    ]);
        }

    }
}
