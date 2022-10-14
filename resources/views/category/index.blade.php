@extends('layouts.app')
@section('title', 'Kategorie')

@section('header')
    <header class="custom--bg container-fluid d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-light">Zarządzaj kategoriami</h1>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <main class="container">
        @include('shared.sessionMessage')
        <div class="row">
            <div class="col-12 text-center py-3">
                <a href="{{route('category.create')}}" class="btn btn-sm btn-success">Dodaj kategorię</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-10 col-lg-8 mx-auto">
                <ul class="list-group">
                    @foreach ($categories as $category)
                        <li class="list-group-item mb-3">
                            <h4>{{$category->title}}</h4>
                            <p>{{$category->description}}</p>
                            <div class="d-flex">
                                <a href="{{route('category.edit', ['id' => $category->id])}}" class="btn btn-sm btn-info me-3">Edytuj</a>
                                <form action="{{ route('category.delete', ['category' => $category->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger ms-3">Usuń</button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </main>
@endsection