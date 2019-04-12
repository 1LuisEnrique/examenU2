@extends ('layout.app')
@section ('title','Nacionalidades')

@section ('content')
    <h1 class="bg-primary text-white text-center">Nacionalidades</h1>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th>id</th>
                <th>nacionalidad</th>

                </thead>
                <tbody>
                @foreach($nacionalidades as $nacionalidad)
                    <tr>
                        <td>{{$nacionalidad->id_nacionalidad}}<td>
                        <td>{{$nacionalidad->nom_na}}</td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>

    {{$nacionalidad}}

@endsection