@extends('adminlte::page')

@section('title', "Editar Perfil {$profile->name}")

@section('content_header')
    <h1>Editar Perfil {{$profile->name}}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('profiles.update', $profile->id) }}" method="post">
                @method('PUT')

                @include('admin.pages.profiles._partials.form')
            </form>
        </div>
    </div>
@endsection