@extends('layouts.app')

@section('page-title', $comic->title)

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>
                {{ $comic->title }}
            </h1>

            <div class="card">

                @if ($comic->thumb)
                <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                @endif

                <div class="card-body">
                    <h5 class="card-title">{{ $comic->series }}</h5>
                    <p class="card-text">
                        {{ $comic->description }}
                    </p>
                    <ul>
                        <li>
                            Price:  $ {{ number_format($comic->price, 2, ',', '.') }}
                        </li>
                        <li>
                            Sale Date: {{ $comic->sale_date }}
                        </li>
                        <li>
                            Type {{ $comic->type }}
                        </li>
                        <li>
                            Artists:
                            <ul>
                                @foreach (json_decode($comic->artists, true) as $artist)
                                    <li>
                                        {{ $artist }}
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            Writers:
                            <ul>
                                @foreach (explode('|', $comic->writers) as $writer)
                                    <li>
                                        {{ $writer }}
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>

                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
