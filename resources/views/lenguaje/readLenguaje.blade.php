@extends('layouts.base')
<div class="Container mt-1">
    @section('title', 'User List')

    <div  class="row justify-content-center">
        <div class="col-md-10">

            <a href="/">
                <br>
                <img src="https://cdn-icons-png.flaticon.com/512/1978/1978543.png" width="100" height="95" class="rounded mx-auto d-block" alt="...">
                <br>
            </a>
            <h2 class="text-center mb-5">LENGUAJES REGISTRADOS</h2>
            <!-- Seccion de alertas -->
            @if(session('registroEliminado'))
                <div class="alert alert-success">
                    {{session('registroEliminado')}}
                </div>
            @endif
            <table class="table table-bordered text-center">
                <thead>
                <tr class="bg-info text-white">
                    <th>Id</th>
                    <th>Descripcion</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                //@foreach($les as $le)
                  //  <tr>

                        //<td>{{$le->id}}</td>
                        <td>{{$le->lenguaje_des}}</td>

                        <td>
                            <div class="btn-group">
                                <a href="{{route('/lenguaje/update', $le->id)}}">
                                    <i class="fas fa-pencil-alt btn btn-primary mr-5"></i>
                                </a>

                                <form action="{{ route('/lenguaje/update', $le->id) }}" method="POST">
                                    @csrf @method('DELETE')
                                    <button type="submit" onclick="return confirm('¿Desea eliminar el registro?')" class="btn btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
            {{$mds->links ()}}
        </div>
    </div>

    @endsection
</div>



