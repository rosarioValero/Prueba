@extends('layouts.app')

@section('content')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body pt-4">      
                    <table class="table pt-4">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Oferta</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Codigo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($misOfertas as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->nombre }}</td>
                                <td>{{ $item->descripcion }}</td>
                                <td><button id="mi-boton" class="btn btn-success">ppj194</button></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$misOfertas->links()}}
                {{-- fin card body --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 