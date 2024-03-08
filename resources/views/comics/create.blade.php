@extends('layouts.app')

@section('page-title', 'Comic Create')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>
                Comic Create
            </h1>

            <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST" class="p-2">
                @csrf
                @method('PUT')


                <div class="mb-3">
                    <label for="title" class="form-label">Title Comic</label>
                    <input type="text" value="{{ $comic->title }}" name="title" id="title" placeholder="Inserisci il titolo..." class="form-control">
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Insert Title..." maxlength="256">
                    @error('title')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="Description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control" cols="30" rows="10" placeholder="Inserisci Descrizione...">{{ $comic->description }}</textarea>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="Insert description..." maxlength="1024">
                    @error('description')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Thumb</label>
                    <input type="text" value="{{ $comic->thumb }}" name="thumb" id="thumb" placeholder="Inserisci la thumb..." class="form-control">
                    <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" placeholder="Insert image URL..." maxlength="1024">
                    @error('thumb')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price Comic</label>
                    <input type="number" value="{{ $comic->price }}" name="price" id="price" placeholder="Inserisci il prezzo..." class="form-control">
                    <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Insert price..." max="1000" min="1">
                    @error('price')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Series Comic</label>
                    <input type="text" value="{{ $comic->series }}" name="series" id="series" placeholder="Inserisci la Series..." class="form-control">
                    <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" placeholder="Insert series..." maxlenght="64">
                    @error('series')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale Date Comic</label>
                    <input type="date" value="{{ $comic->sale_date }}" name="sale_date" id="sale_date" placeholder="Inserisci la Sale Date..." class="form-control">
                    <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" placeholder="Insert sale date...">
                    @error('sale_date')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Type Comic</label>
                    <input type="text" value="{{ $comic->type }}" name="type" id="type" placeholder="Inserisci il Type..." class="form-control">
                    <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" placeholder="Insert type..." maxlenght="32">
                    @error('type')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="artists" class="form-label">Artists Comic</label>
                    <input type="text" value="{{ $comic->artists }}" name="artists" id="artists" placeholder="Inserisci gli Artisti..." class="form-control">
                    <input type="text" class="form-control @error('artists') is-invalid @enderror" id="artists" name="artists" placeholder="Insert artists..." maxlenght="2000">
                    @error('artists')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="writers" class="form-label">Writers Comic</label>
                    <input type="text" value="{{ $comic->writers }}" name="writers" id="writers" placeholder="Inserisci gli Scrittori..." class="form-control">
                    <input type="text" class="form-control @error('writers') is-invalid @enderror" id="writers" name="writers" placeholder="Insert writers..." maxlenght="2000">
                    @error('writers')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="btn btn-success">
                        Modifica
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
