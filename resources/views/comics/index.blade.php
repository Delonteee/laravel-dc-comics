@extends('layouts.app')

@section('page-title', 'Comic Index')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>
                Comic Index
            </h1>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Series</th>
                        <th scope="col">Sale Date</th>
                        <th scope="col">Type</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($comics as $comic)
                        <tr>
                            <th scope="row">
                                {{ $comic->id }}
                            </th>
                            <td>
                                {{ $comic->title }}
                            </td>
                            <td>
                                $ {{ number_format($comic->price, 2, ',', '.') }}
                            </td>
                            <td>
                                {{ $comic->series }}
                            </td>
                            <td>
                                {{ $comic->sale_date }}
                            </td>
                            <td>
                                {{ $comic->type }}
                            </td>
                            <td> 
                                <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn-primary btn-sm">Details</a>
                            </td>
                            <td>
                                <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="btn btn-warning">Modify</a></td>
                            <td>
                                <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form> 
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <div>
                    <a href="{{ route('comics.create') }}" class="btn btn-dark my-3 ">
                        Add New
                    </a>
                </div>
            </table>
        </div>
    </div>
</div>
@endsection
