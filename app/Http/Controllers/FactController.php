<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Fact;

class FactController extends Controller
{
    public function facts() {
        $lesFaits = Fact::get();
        return view('pages.faits', ['lesFaits'=>$lesFaits]);

    }


}
