@extends('layout.layout')
@section('title','Empleados')
@section('content')
    <h1 class="bg-primary text-white text-center">Empleados</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("empleados/create")}}">Agregar</a></div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th>id empleado</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Código Postal</th>
                <th>Empresa</th>
                </thead>
                <tbdoy>
                    @foreach($empleados as $empleado)
                        <tr>
                            <td>{{$empleado->id_empleado}}</td>
                            <td>{{$empleado->nombre}}</td>
                            <td>{{$empleado->ap}}</td>
                            <td>{{$empleado->direccion}}</td>
                            <td>{{$empleado->telefono}}</td>
                            <td>{{$empleado->codpost}}</td>
                            <td>{{$empleado->empresa}}</td>
                        </tr>
                    @endforeach
                </tbdoy>
            </table>
        </div>
    </div>
@endsection