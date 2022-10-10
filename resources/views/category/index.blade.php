@extends('layouts.app')
@section('title', 'Kategorie')

@section('content')
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1>Zarządzaj kategoriami</h1>

                @if(session()->has('message'))
                    <p>{{session('message')}}</p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="list-group">
                    @foreach ($categories as $category)
                        <li class="list-group-item">
                            <h4>{{$category->title}}</h4>
                            <p>{{$category->description}}</p>
                            <div>
                                <a href="{{route('category.edit', ['id' => $category->id])}}" class="btn-btn-info">Edytuj</a>
                                <a href="#" class="btn-btn-info">Usuń</a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </main>
@endsection