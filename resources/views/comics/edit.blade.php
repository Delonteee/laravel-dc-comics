@extends('layouts.app')

@section('page-title', $comic->title)

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>
                Edit: {{ $comic->title }}
            </h1>

            <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST" class="p-2">
                @csrf
                @method('PUT')


                <div class="mb-3">
                    <label for="title" class="form-label">Title Comic</label>
                    <input type="text" value="{{ $comic->title }}" name="title" id="title" placeholder="Inserisci il titolo..." class="form-control">
                </div>

                <div class="mb-3">
                    <label for="Description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control" cols="30" rows="10" placeholder="Inserisci Descrizione...">{{ $comic->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Thumb</label>
                    <input type="text" value="{{ $comic->thumb }}" name="thumb" id="thumb" placeholder="Inserisci la thumb..." class="form-control">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price Comic</label>
                    <input type="number" value="{{ $comic->price }}" name="price" id="price" placeholder="Inserisci il prezzo..." class="form-control">
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Series Comic</label>
                    <input type="text" value="{{ $comic->series }}" name="series" id="series" placeholder="Inserisci la Series..." class="form-control">
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale Date Comic</label>
                    <input type="date" value="{{ $comic->sale_date }}" name="sale_date" id="sale_date" placeholder="Inserisci la Sale Date..." class="form-control">
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Type Comic</label>
                    <input type="text" value="{{ $comic->type }}" name="type" id="type" placeholder="Inserisci il Type..." class="form-control">
                </div>

                <div class="mb-3">
                    <label for="artists" class="form-label">Artists Comic</label>
                    <input type="text" value="{{ $comic->artists }}" name="artists" id="artists" placeholder="Inserisci gli Artisti..." class="form-control">
                </div>

                <div class="mb-3">
                    <label for="writers" class="form-label">Writers Comic</label>
                    <input type="text" value="{{ $comic->writers }}" name="writers" id="writers" placeholder="Inserisci gli Scrittori..." class="form-control">
                </div>

                <div>
                    <button type="submit" class="btn btn-success">
                        Modify
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection