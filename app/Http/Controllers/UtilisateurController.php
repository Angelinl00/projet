<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UtilisateurController extends Controller
{
    public function index() {

        if(Storage::disk('public')->exists('image1.jpg') && Storage::disk('public')->exists('image2.jpg')) {
            $image1 = Storage::disk('public')->url('image1.jpg') ;
            $image2 = Storage::disk('public')->url('image2.jpg') ;
        }

        $images = [
            'image1' => $image1 ,
            'image2' => $image2
        ] ;
        return view('index' , $images) ;
    }

    public function inscription() {
        return view('form.inscription') ;
    }
    public function connection() {
        return view('form.connection') ;
    }
    public function connect(Request $request) {
        $matricule = $request->matricule ;
        $pass = $request->password ;

        $user = Utilisateur::where('matricule' , '=' , $matricule)->get() ;
        foreach($user as $u) {
            // dd($u->matricule) ;
            $password = $u->password ?? null ;
        }
        if($password == $pass ) {
            dd("vous être connecté") ;
        } else {
            abort(403) ;
        }

    }
    public function store(Request $request) {
        // dd("test") ;
        $request->validate([
            'matricule' => 'required | min:6 | max:14 ' ,
            'login' => 'required | min:3 | max:14' ,
            'telephone' => 'required | min:8 | max:16' ,
            'mail' => 'required | email' ,
            'password' => 'required | min:8'
        ]) ;

        Utilisateur::create([
            'matricule' => $request->matricule ,
            'login' => $request->login ,
            'telephone' => $request->telephone ,
            'mail' => $request->mail ,
            'password' => $request->password
        ]) ;

        // rediriger vers la page d'accueil
    }

    public function admin() {

    }
}
