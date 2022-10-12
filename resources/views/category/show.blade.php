@extends('layouts.app')
@section('title', 'Kategoria: ' . $category->title)

@section('content')
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1>Kategoria: {{$category->title}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="list-group">
                    @foreach ($products as $product)
                        <li class="list-group-item mb-3 shadow-lg">
                            <h5>{{$product->title}}</h5>
                            <p>{{$product->description}}</p>
                            <p>{{$product->amount}} PLN</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            {!! $products->links() !!}
        </div>
    </main>
@endsection