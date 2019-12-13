<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Fact;

class FactController extends Controller
{
    public function randomfact() {

        $randomfacts = Fact::inRandomOrder()->take(1)->get();
        return view('pages.faits', ['randomfacts'=>$randomfacts]);

    }

    public function facts() {
        $lesFaits = Fact::get();
        return view('pages.faits', ['lesFaits'=>$lesFaits]);
    }

    public function ajout() {

        echo "blabla";

    }


}
