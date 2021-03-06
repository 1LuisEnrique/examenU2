@extends('layout.layout')
@section('title','Agregar Categorias')

@section('content')

    <h1 class="bg-primary text-white text-center">Agregar categorias</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("categorias")}}">Regresar</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{url("categorias")}}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputPassword1">Nombre Categoria</label>
                    <input type="text" class="form-control" name="desc_categoria" placeholder="Categoria">
                </div>
                <button type="submit" class="btn btn-primary">Aceptar</button>
            </form>
        </div>
    </div>
@endsection