@extends('layouts.admin')

@section('admin_content')

<div id="admin_comics">
    <h1 class="text-center pt-3">Tutti i comics nella tabella sottostante</h1>
    <div class="container py-5">
        <div class="text-end mb-3">
            <a class="btn btn-primary" href="{{ route('admin.comics.create') }}" role="button">Crea Comic</a>
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
                @foreach($comics as $comic)
                <tr>
                    <td scope="row">{{ $comic->id }}</td>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->created_at }}</td>
                    <td>{{ $comic->updated_at }}</td>
                    <td>
                        <a href="{{ route('comic', ['comic' => $comic->id]) }}"><i class="fas fa-eye"></i></a>
                        <a href=""><i class="fas fa-pencil-alt"></i></a>
                        <a href=""><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $comics->links() }}
    </div>
</div>

@endsection