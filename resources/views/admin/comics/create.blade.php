@extends('layouts.admin')

@section('admin_content')

<div id="create_comics">
    <h1 class="text-center">Crea un nuovo Comic</h1>
    <div class="container">
        @include('partials.error')
        <form action="{{ route('admin.comics.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Scrivi il titolo" aria-describedby="titleHelper">
                <small id="titleHelper" class="text-muted">Scrivi un titolo, max 255 caratteri</small>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea placeholder="Inserisci la descrizione" class="form-control" name="description" id="description" rows="5"></textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Inserisci URL Immagine" aria-describedby="imageHelper">
                <small id="imageHelper" class="text-muted">Inserisci un URL di un immagine completo, max 255 caratteri</small>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" name="price" id="price" class="form-control" placeholder="Inserisci il prezzo">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" name="series" id="series" class="form-control" placeholder="Inserisci la serie" aria-describedby="serieHelper">
                <small id="serieHelper" class="text-muted">Inserisci il tipo di serie</small>
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di Uscita</label>
                <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="Inserisci la data di uscita" aria-describedby="saleDateHelper">
                <small id="saleDateHelper" class="text-muted">Inserisci la data di uscita con questa formattazione AAAA-MM-GG</small>
            </div>
            <div class="pb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" name="type" id="type" class="form-control" placeholder="Inserisci il tipo" aria-describedby="typeHelper">
                <small id="typeHelper" class="text-muted">Inserisci il tipo di Comic tra 'comic book' o 'graphic novel'</small>
            </div>
            <div class="text-center pb-5">
                <button type="submit" class="btn btn-success w-25">Salva</button>
            </div>
        </form>
    </div>
</div>

@endsection