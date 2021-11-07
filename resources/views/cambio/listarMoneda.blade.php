@extends('layouts.base')

<div class="Container mt-1">
    @section('title', 'User List')

    @section('content')
        <div  class="row justify-content-center">
            <div class="col-md-10">

                <a href="/">
                    <br>
                    <img src="https://umgnaranjo.com/wp-content/uploads/2018/11/logo.png" width="100" height="95" class="rounded mx-auto d-block" alt="...">
                    <br>
                </a>
                <h2 class="text-center mb-5">Lista de Criptomoneda</h2>
                <!-- Seccion de alertas -->
                @if(session('usuarioEliminado'))
                    <div class="alert alert-success">
                        {{session('usuarioEliminado')}}
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

                        <tr>
                            <td>Maria</td>

                        </tr>

                    </tbody>

                </table>

            </div>
        </div>

    @endsection
</div>

