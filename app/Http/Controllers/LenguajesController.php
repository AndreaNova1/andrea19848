<?php

namespace App\Http\Controllers;

use App\Models\Lenguaje_Progra;
use Illuminate\Http\Request;

class LenguajesController extends Controller
{
    //Permite Listar los lenguajes que se utilizaran
    public function read(){
        $lenguage['lenguajes_Progra'] = Lenguaje_Progra::paginate(7);

        return view('lenguaje.readLenguaje', $lenguage);
    }
//Formulario para registrar
    public function updateForm($id){
        $lens = Lenguaje_Progra::all();


        return view('lenguaje.upgrateLenguaje', compact( 'lens'));
    }

}
