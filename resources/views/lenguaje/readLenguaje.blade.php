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
                    @foreach($lens as $len)
                        <tr>

                            <td>{{$len->id}}</td>
                            <td>{{$len->lenguaje_des}}</td>
                            <td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{url('/lenguaje/update', $len->id)}}">
                                        <i class="fas fa-pencil-alt btn btn-outline-primary mr-2">  Update</i>
                                    </a>

                                    <form action="{{ url('/lenguaje/delete', $len->id) }}" method="POST" class="formulario-eliminar">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm">
                                            <i class="fas fa-trash-alt"> Delete</i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>

    @endsection
</div>


