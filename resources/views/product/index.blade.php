@extends('layouts.app')
@section('title', 'Usługi')

@section('header')
    <header class="custom--bg container-fluid d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-light">Lista Usług Norella</h1>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <main class="container pt-3 mt-md-5 pt-md-5">
        @include('shared.sessionMessage')
        <div class="row text-center">
            <div class="col-12">
                @auth
                    <div class="col-12">
                        <a href="{{route('product.create')}}" class="btn btn-sm btn-success">Dodaj Usługę</a>
                    </div>
                @endauth
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center text-lg-start col-lg-4">
                <h4>Kategorie:</h4>
                <ul class="list-group">
                    @foreach ($categories as $category)
                    <li class="list-gorup-item">
                        <a href="{{route('category.show', ['id' => $category->id])}}" class="text-pink">{{$category->title}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-12 col-lg-8">
                <ul class="list-group">
                    @foreach ($products as $product)
                        <li class="list-group-item my-3 shadow-sm rounded-2">
                            <div class="d-flex justify-content-between align-items-end text-pink">
                                <h4 class="mb-0 fs-2">{{$product->title}}</h4>
                                <p class="ms-3 mb-0">{{$product->amount}} PLN</p>
                            </div>
                            <ul class="d-flex p-0">
                                @foreach($product->categories as $category)
                                    <li class="text-muted border rounded-pill me-2 px-2">{{$category->title}}</li>
                                @endforeach
                            </ul>
                            <p class="my-3">{{$product->description}}</p>
                            @auth
                                <div class="d-flex">
                                    <a href="{{route('product.edit', ['id' => $product->id])}}" class="btn btn-sm btn-info me-3">Edytuj</a>
                                    <form action="{{ route('product.delete', ['product' => $product->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger ms-3">Usuń</button>
                                    </form>
                                </div>
                            @endauth
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