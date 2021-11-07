<!--es para agregar usuarios-->
@extends('layouts.base')
@section('title', 'User Create')
@section('content')

<div class="container"> @yield('content')</div>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7 mt-5">


            <!--mensaje flash-->
            @if(session('usuarioGuardado'))
                <div class="alert alert-success">
                    {{ session('usuarioGuardado') }}
                </div>
            @endif

        <!--validacion errores-->
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card">

                <form action="{{ url ('save') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-header text-center p-3 mb-2 bg-info text-white">AGREGAR TIPO DE MONEDA</div>

                    <div class="card-body  ">
                        <div class="row form-group">
                            <label for="" class="col-3">Logotipo</label>
                            <div class="custom-file col-md-8">
                                <input type="file" name="logotipo" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile"> Subir Logo </label>
                            </div>
                        </div>


                        <div class="row form-group">
                            <label for="" class="col-2">Nombre</label>
                            <input type="text" name="nombre" class="form-control col-md-9 border border-info">
                        </div>

                        <div class="row form-group">
                            <label for="" class="col-2" >Precio</label>
                            <input type="file" name="foto" class="img-fluid border">
                        </div>

                        <div class="row form-group">
                            <label for="" class="col-2" >Descripcion</label>
                            <input type="file" name="descripcion" class="img-fluid border">
                        </div>

                        <div class="row form-group">
                            <button type="submit" class="btn btn-success col-md-3 offset-2">Guardar</button>
                            <a  href=" {{ url('/') }}" class="btn bg-danger text-white col-md-3 offset-2" type="submit">Cancelar</a>
                        </div>

                    </div>

                </form>
            </div>

        </div>

    </div>


    @endsection
</div>
</body>

</html>
