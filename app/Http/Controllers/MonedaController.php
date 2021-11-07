<?php

namespace App\Http\Controllers;
use App\models\Moneda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MonedaController extends Controller
{
    //Formulario de usuarios
    public function formMoneda(){
        return view('cambio.formMoneda');
    }
    //Guardar usuarios
    public function save(Request $request){
        //se utiliza para dar las validaciones
        $validator = $this->validate($request, [
            'logotipo'=>'required',
            'nombre'=> 'required|string|max:75',
            'precio'=> 'required',
            'descripcion'=>'required|string|max:200',
            'rol'=> 'required|string'
        ]);

        //almacenamos la fotografia en la carpeta indicada
        if($request->hasFile('logotipo')){
            $validation['logotipo'] = $request-> file('logotipo')->store('logos','public');
        }

        //su funcion es guardar los datos en la base de datos
        Moneda::create([
            'logotipo'=>$validator['logotipo'],
            'nombre'=>$validator['nombre'],
            'precio'=>$validator['precio'],
            'rol_id'=>$validator['rol']
        ]);

        return back()->with('usuarioGuardado','Usuario Guardado');
    }
}
