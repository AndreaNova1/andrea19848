<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Moneda;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MonedaController extends Controller
{
    //Listado de Criptomonedas
    public function list()
    {
        $data['mds'] = Moneda::paginate(3);

        return view('cambio.listarMoneda', $data);
    }

    public function formMoneda(){
        return view('cambio.formMoneda');
    }

    //guardar datos de monedas
    public function save(Request $request){
        $validator = $this->validate($request, [
            'logotipo'=>'required',
            'nombre'=> 'required|string|max:75',
            'precio'=>'required',
            'descripcion'=> 'required|string'
        ]);
        return back()->with('datosGuardado','datos Guardado');
    }
}
