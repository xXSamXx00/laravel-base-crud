@extends('layouts.admin')

@section('admin_content')

<div id="create_comics">
    <h1 class="text-center">Aggiorna Movie</h1>
    <div class="container">
        @include('partials.error')
        <form action="{{ route('movies.update', $movie->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Scrivi il titolo" aria-describedby="titleHelper" value="{{ $movie->title }}">
                <small id="titleHelper" class="text-muted">Scrivi un titolo, max 255 caratteri</small>
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea placeholder="Inserisci la descrizione" class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="5">{{ $movie->description }}</textarea>
                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror" placeholder="Inserisci URL Immagine" aria-describedby="imageHelper" value="{{ $movie->thumb }}">
                <small id="imageHelper" class="text-muted">Inserisci un URL di un immagine completo, max 255 caratteri</small>
                @error('thumb')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="cover" class="form-label">Immagine di sfondo</label>
                <input type="text" name="cover" id="cover" class="form-control @error('cover') is-invalid @enderror" placeholder="Inserisci URL Immagine di sfondo" aria-describedby="imageHelper" value="{{ $movie->cover }}">
                <small id="imageHelper" class="text-muted">Inserisci un URL di un immagine di sfondo completo, max 255 caratteri</small>
                @error('cover')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="director" class="form-label">Regista</label>
                <input type="text" name="director" id="director" class="form-control @error('director') is-invalid @enderror" placeholder="Inserisci il Regista" value="{{ $movie->director }}">
                @error('director')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Genere</label>
                <input type="text" name="genre" id="genre" class="form-control @error('genre') is-invalid @enderror" placeholder="Inserisci il genere" aria-describedby="serieHelper" value="{{ $movie->genre }}">
                <small id="serieHelper" class="text-muted">Inserisci il tipo di genere</small>
                @error('genre')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="text-center pb-5">
                <button type="submit" class="btn btn-success w-25">Salva</button>
            </div>
        </form>
    </div>
</div>

@endsection