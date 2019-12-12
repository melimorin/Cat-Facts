<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use App\Fact;


class FactsTableSeeder extends Seeder
{
    public function run() {

        $texteJson = Storage::get("cat-facts.json");
        $facts = json_decode($texteJson);

        foreach($facts->data as $fact) {
            $faits = new Fact();
            $faits->faits = $fact->fact;
            $faits->save();

        }

    }
}
