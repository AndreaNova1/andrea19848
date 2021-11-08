<?php

namespace App\Http\Controllers;

use App\Models\Lenguaje_Progra;
use Illuminate\Http\Request;

class LenguajesController extends Controller
{
    //Permite Listar los lenguajes que se utilizaran
    public function read(){
        $les['lenguajes_Progra'] = Lenguaje_Progra::paginate(7);

        return view('lenguaje.readLenguaje', $les);
    }
//Formulario para registrar
    public function updateForm($id){
        $les = Lenguaje_Progra::all();


        return view('lenguaje.upgrateLenguaje', compact( 'les'));

    }
    public function save(Request $request){

        $validator = $this->validate($request, [
            'lenguaje_des'=> 'required|unique:App\Models\Lenguaje,lenguajes_des|string|max:45',
        ]);

        Lenguaje_Progra::create([
            'lenguaje_des'=>$validator['lenguajes_des']
        ]);

        return redirect('/lenguaje/read')->with('guardar', 'ok');
    }

}
