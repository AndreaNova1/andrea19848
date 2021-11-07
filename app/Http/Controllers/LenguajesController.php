<?php

namespace App\Http\Controllers;

use App\Models\Lenguaje_Progra;
use Illuminate\Http\Request;

class LenguajesController extends Controller
{
    public function read(){
        $language['lenguajes_Progra'] = Lenguaje_Progra::paginate(7);

        return view('lenguaje.readLenguaje', $language);
    }

}
