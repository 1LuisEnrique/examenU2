@extends('layout.layout')
@section('title','Agregar empleados')

@section('content')

    <h1 class="bg-primary text-white text-center">Agregar empleados</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("categorias")}}">Regresar</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{url("empleados")}}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputPassword1">Nombre Empleado</label>
                    <input type="text" class="form-control" name="nombre" placeholder="">
                    <label for="exampleInputPassword2">Apellido</label>
                    <input type="text" class="form-control" name="ap" placeholder="">
                    <label for="exampleInputPassword3">Dirección</label>
                    <input type="text" class="form-control" name="direccion" placeholder="">
                    <label for="exampleInputPassword4">Telefono</label>
                    <input type="text" class="form-control" name="telefono" placeholder="">
                    <label for="exampleInputPassword5">Código Postal</label>
                    <input type="text" class="form-control" name="codpost" placeholder="">
                    <label for="exampleInputPassword1">Empresa</label>
                    <input type="text" class="form-control" name="empresa" placeholder="">
                </div>
                <button type="submit" class="btn btn-primary">Agregar</button>
            </form>
        </div>
    </div>
@endsection