<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function PHPSTORM_META\map;


class InscriptionController extends Controller
{
    //

    public function createUserForm(Request $request){
        //dd($request);
        $fname=$request->userfirstname;
        $lname=$request->userlastname;
        return view('dashboard',
            [
                'nom' =>$fname,
                'prenom' =>$lname,
            ]
        );
    }


    public function UserForm(Request $request){

        //validation du formulaire 

        $this->validate($request, [
            'userfirstname' =>'required',
            'userlastname' =>'required',
            'email' =>'required|email',
            'password' => 'required'
        ]);
        //enregistrer les datas dans la base de donnée
        'App\Models\Inscription'::create($request->all());
        
        //retourne un message indiuant la réussite de l'opération
        return back()->with('success', 'Les données ont été enregistrées avec succès.');
    }
}
