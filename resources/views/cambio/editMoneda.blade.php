@extends('layouts.base')
@section('title', 'User Update')

@section('content')
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-7 mt-5">
                <!--Mensaje flash-->
                @if(session("usuarioModificado"))
                    <div class="alert alert-success">
                        {{session("usuarioModificado")}}
                    </div>
                @endif
            <!--Validacion de errores-->
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
//modificacion reciente 17:54
                <div class="card">
                    <form action="{{ route('editMoneda', $moneda->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header  text-center  p-4 mb-2 bg-info text-white">MODIFICAR REGISTRO</div>

                        <div class="card-body">

                            <div class="row form-group">
                                <label for="" class="col-3">Logotipo</label>
                                <div class="custom-file col-md-8">
                                    <input type="file" name="logotipo" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile"> Subir Logo </label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">nombre</label>
                                <input type="text" name="nombre" class="form-control border border-info" value="{{ $moneda->nombre }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">precio</label>
                                <input type="text" name="nombre" class="form-control border border-info" value="{{ $moneda->precio }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">descripcion</label>
                                <input type="text" name="descripcion" class="form-control border border-info" value="{{ $moneda->descripcion }}">
                            </div>





                            <div class="row form-group">
                                <label for="" class="col-2">Lenguaje</label>
                                <select name="rol_id" class="form-control col-md-9" >
                                    <option value="">Seleccione el lenguaje</option>

                                    @foreach( $lenguaje_des as $lenguaje)
                                        <option value="{{$lenguaje->lenguaje_id}}" class="text-center"> {{$lenguaje->descripcion}}  </option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="row form-group">
                                <button type="submit" class="btn btn-outline-success col-md-4 offset-2  mb-2 bg-success text-white">Modificar</button>
                                <a  href=" {{ url('/') }}" class="btn bg-danger text-white col-md-3 offset-2" type="submit">Regresar</a>

                            </div>

                        </div>

                    </form>
                </div>

            </div>

        </div>

        @endsection
    </div>
