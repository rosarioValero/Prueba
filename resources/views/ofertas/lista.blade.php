@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Lista de Ofertas para {{auth()->user()->name}}</span>
                    
                </div>

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
                            @foreach ($oferta as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->nombre }}</td>
                                <td>{{ $item->descripcion }}</td>
                                <td><?php echo app\Http\Controllers\UsuarioController::generarCodigo('6');?></td>
                                <td><a href="misOfertas"  class="btn btn-success btn-sm">guardar Oferta
                                </td>
                                <td>
                                <form action="{{ route('ofertas.eliminar', $item)}}" class="d-inline" method="POST">
                                @method('DELETE')
                                
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form> 
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$oferta->links()}}
                {{-- fin card body --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 