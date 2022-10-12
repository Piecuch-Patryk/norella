@extends('layouts.app')
@section('title', 'Kategoria: ' . $category->title)

@section('header')
    <header class="custom--bg container-fluid d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-light">{{$category->title}}</h1>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <main class="container mt-md-5">
        <div class="row">
            <div class="col-12 col-md-10 col-lg-8 mx-auto">
                <ul class="list-group">
                    @foreach ($products as $product)
                        <li class="list-group-item my-3 shadow-sm rounded-2">
                            <div class="d-flex justify-content-between align-items-center align-items-md-end text-pink">
                                <h4 class="mb-0 fs-2">{{$product->title}}</h4>
                                <p class="ms-3 mb-0 text-nowrap">{{$product->amount}} PLN</p>
                            </div>
                            <p class="my-3">{{$product->description}}</p>
                        </li>
                    @endforeach
                </ul>
                <div class="d-flex justify-content-center">
                    {{$products->links()}}
                </div>
            </div>
        </div>
    </main>
@endsection