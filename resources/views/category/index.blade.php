@extends('layouts.app')
@section('title', 'Kategorie')

@section('content')
    <main class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12">
                <h1>Zarządzaj kategoriami</h1>

                @if(session()->has('message'))
                    <p>{{session('message')}}</p>
                @endif
            </div>
            <div class="col-12">
                <a href="{{route('category.create')}}" class="btn btn-sm btn-success">Dodaj kategorię</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="list-group">
                    @foreach ($categories as $category)
                        <li class="list-group-item">
                            <h4>{{$category->title}}</h4>
                            <p>{{$category->description}}</p>
                            <div class="d-flex">
                                <a href="{{route('category.edit', ['id' => $category->id])}}" class="btn-btn-info">Edytuj</a>
                                <form action="{{ route('category.delete', ['category' => $category->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger py-0">Usuń</button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </main>
@endsection