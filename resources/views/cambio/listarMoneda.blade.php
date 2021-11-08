@extends('layouts.base')

<div class="Container mt-1">
    @section('title', 'User List')

    @section('content')
        <div  class="row justify-content-center">
            <div class="col-md-10">

                <a href="/">
                    <br>
                    <img src="https://cdn-icons-png.flaticon.com/512/1978/1978543.png" width="100" height="95" class="rounded mx-auto d-block" alt="...">
                    <br>
                </a>
                <h2 class="text-center mb-5">Lista de Criptomoneda</h2>
                <!-- Seccion de alertas -->
                @if(session('registroEliminado'))
                    <div class="alert alert-success">
                        {{session('registroEliminado')}}
                    </div>
                @endif
                <table class="table table-bordered text-center">
                    <thead>
                    <tr class="bg-info text-white">
                        <th>Logo</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Descripcion</th>
                        <th>Lenguaje</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                            @foreach($mds as $md)
                                <tr>
                                    <td class="border border-secondary" >
                                        <!--se utiliza para llamar al logotipo-->
                                        <img src="{{ asset('storage').'/'.$md->logotipo}}" class="img-fluid img-thumbnail"  width="50px">
                                    </td>
                                    <td>{{$md->nombre}}</td>
                                    <td>{{$md->precio}}</td>
                                    <td>{{$md->descripcion}}</td>
                                    <td>{{$md->lenguaje_des}}</td>
                                <td>
                                    <div class="btn-group">
                                        <form action="{{route('editMoneda', $md->id)}}" method="POST">
                                            @csrf
                                            <button type="submit"  class="btn btn-danger">
                                                <i class="fas fa-pencil-alt btn btn-primary mr-5"></i>
                                            </button>
                                        </form>

                                        <form action="{{ route('delete', $md->id) }}" method="POST">
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

