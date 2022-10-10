@extends('layouts.app')
@section('title', 'Kategoria: ' . $category->title)

@section('content')
    <h1>Kategoria: {{$category->title}}</h1>
    <ul class="list-group">
        @foreach ($products as $product)
            <li class="list-group-item mb-3 shadow-lg">
                <h5>{{$product->title}}</h5>
                <p>{{$product->description}}</p>
                <p>{{$product->amount}} PLN</p>
            </li>
        @endforeach
    </ul>
@endsection