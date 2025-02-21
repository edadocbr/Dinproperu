@extends('layout')

@section('content')

    <!-- ==================== Page-Title (Start) ==================== -->
    <div class="page-title-error-404">

        <div class="title">
        <h2>Página no encontrada - Error 404</h2>
        </div> 

        <div class="link">
            <a href="{{ route('pages.home') }}"><i class="fa-solid fa-house-chimney"></i> Regresar al inicio</a>
        </div>

    </div>
    <!-- ==================== Page-Title Area (End) ==================== -->
@endsection
