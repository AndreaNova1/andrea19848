<?php

namespace App\Http\Controllers;
use App\Models\Lenguaje_Progra;
use Illuminate\Http\Request;
use App\Moneda;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MonedaController extends Controller
{
    //permite listar de Criptomonedas tiene relacion con listarMoneda
    public function list()
    {//se modificio
        $mds = DB::table('criptomoneda')
            // Relacion de Lenguaje
                ->join('lenguaje_programacion', 'criptomoneda.lenguaje_id', '=', 'lenguaje_programacion.id')
                ->select('criptomoneda.*', 'lenguaje_programacion.lenguaje_des')
                ->paginate(3);


        return view('cambio.listarMoneda', compact('mds'));
    }
//Permite registrar con el formulario de la moneda
    public function formMoneda(){
        $lenguaje=Lenguaje_Progra::all();

        return view('cambio.formMoneda', compact ('lenguaje'));
    }

    //guardar datos de monedas
    public function save(Request $request){
        $validator = $this->validate($request, [
            'logotipo'=>'required',
            'nombre'=> 'required|string|max:75',
            'precio'=>'required',
            'descripcion'=> 'required|string',
            'lenguaje'=>'required',
        ]);
//llama al campo del logotipo
        if($request->hasFile('logotipo')){
            $validator['logotipo']=$request->file('logotipo')->store('logotipo', 'public');
        }
        Moneda::create([
            'logotipo'=>$validator['logotipo'],
            'nombre'=>$validator['nombre'],
            'precio'=>$validator['precio'],
            'descripcion'=>$validator['descripcion'],
            'lenguaje_id'=>$validator['lenguaje'],
        ]);
        return back()->with('datosGuardado','datos Guardado');
    }
    //Eliminar Registros
    public function delete($id){
        Moneda::destroy($id);

        return back()->with('registroElimnado', 'registroEliminado');
    }
    //editar Registros realizados
    public function editMoneda($id){
        $moneda= Moneda::findOrFail($id);
        $lenguaje=Lenguaje_Progra::all();

        return view('cambio.editMoneda', compact('lenguaje'));
        }

        public function edit(Request $request, $id){
            $dataMoneda = request()->except((['_token','_method']));

            //edita imagenes
            if($request->hasFile('logotipo')){

                $moneda = Moneda::findOrFail($id);
                Storage::delete('public/'.$moneda->logotipo);
                $dataMoneda ['logotipo'] = $request-> file('logotipo')->store('logotipo','public');
            };

            Moneda::where('logotipo', '=', $id)->update($dataMoneda);

            return back()->with('usuarioModificado','Usuario Modificado');
        }
}

