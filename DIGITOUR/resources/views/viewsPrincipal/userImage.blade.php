@extends('templateViews')

@section('contenido')
<div class="container">
    <h1 class="text-center my-4">Imágenes del Usuario</h1>

    @if(count($userFiles) > 0)
        <div class="row">
            @foreach($userFiles as $file)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <img src="{{ asset('storage/' . $file) }}" class="card-img-top" alt="Imagen del usuario">
                        <div class="card-body">
                            <p class="card-text">Imagen del usuario subida con éxito.</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-center text-muted">No hay imágenes para este usuario.</p>
    @endif
</div>
@endsection
