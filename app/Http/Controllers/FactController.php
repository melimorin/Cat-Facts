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
        return view('pages.liste', ['lesFaits'=>$lesFaits]);
    }

    public function formulaire(Request $request) {
        $fait = $request->input('faits');
        $entity = new Fact;
        $entity->faits = $fait;
        $entity->save();
        return redirect('/liste');

    }
    public function ajout() {

        return view('pages.ajout');

    }

    public function formulairemodif(Request $request, $id) {
        // va chercher l'object original
        $fact = Fact::find($id);

        // remplace les propriete par ceux modifier dans le formuaire
        $fact->faits = $request->input('faits');

        // Sauvegarde l'object
        $fact->save();

        return redirect('/liste');
    }

    public function modif($id) {
        $fact = Fact::find($id);
        return view('pages.modif', ['id'=>$fact->id, 'faits'=>$fact->faits]);
    }

    public function delete($id) {
        // va chercher l'object original
        Fact::destroy($id);

        return redirect('/liste');
    }


}
