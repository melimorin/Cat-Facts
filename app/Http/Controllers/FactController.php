<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Fact;

class FactController extends Controller
{
    public function randomfact() {

        $randomfacts = Fact::inRandomOrder()->take(1)->get();
        return view('pages.faits', ['randomfacts'=>$randomfacts]);

    }

    public function facts() {
        $lesFaits = Fact::get();
        $lesFaits = Str::limit($lesFaits, 40);
        return view('pages.liste', ['lesFaits'=>$lesFaits]);
    }

    public function ajout() {

        echo "blabla";

    }


}
