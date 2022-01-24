@extends('layouts.admin')

@section('admin_content')

<div id="home_admin">
    <h1 class="text-center py-3">Crea nuovi elementi</h1>
    <div class="container">
        <div class="row">
            <div class="col-6 text-center">
                <h3>Comics</h3>
                <p><a class="btn btn-primary" href="{{ route('admin.comics.create') }}" role="button">Crea Comic</a></p>
            </div>
            <div class="col-6 text-center">
                <h3>Movies</h3>
                <p><a class="btn btn-primary" href="{{ route('movies.create') }}" role="button">Crea Movie</a></p>
            </div>
        </div>
    </div>
</div>

@endsection