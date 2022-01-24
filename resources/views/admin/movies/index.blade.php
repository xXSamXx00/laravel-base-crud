@extends('layouts.admin')

@section('admin_content')

<div id="admin_comics">
    <h1 class="text-center pt-3">Tutti i movies nella tabella sottostante</h1>
    <div class="container py-5">
        @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
        <div class="text-end mb-3">
            <a class="btn btn-primary" href="{{ route('movies.create') }}" role="button">Crea Movie</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Creato il</th>
                    <th>Aggiornato il</th>
                    <th>Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach($movies as $movie)
                <tr>
                    <td scope="row">{{ $movie->id }}</td>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->created_at }}</td>
                    <td>{{ $movie->updated_at }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('movies.show', $movie->id) }}"><i class="fas fa-eye"></i></a>
                        <a class="btn btn-secondary" href="{{ route('movies.edit', $movie->id) }}"><i class="fas fa-pencil-alt"></i></a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $movie->id }}">
                            <i class="fas fa-trash-alt"></i>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="delete{{ $movie->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-{{ $movie->id }}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Eliminare definitivamente il Movie numero <strong>{{ $movie->id }}</strong>?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Stai per eliminare definitivamente il Movie <strong>{{ $movie->title }}</strong>! Sei sicuro di voler continuare?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                                        <form action="{{ route('movies.destroy', $movie->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger">Elimina</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $movies->links() }}
    </div>
</div>

@endsection