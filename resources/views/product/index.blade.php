@extends('layouts.app')
@section('title', 'Usługi')

@section('content')
    <main class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12">
                <h1>Zarządzaj usługami</h1>

                @if(session()->has('message'))
                    <p>{{session('message')}}</p>
                @endif
            </div>
            <div class="col-12">
                <a href="{{route('product.create')}}" class="btn btn-sm btn-success">Dodaj Usługę</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-8 mx-auto">
                <ul class="list-group">
                    @foreach ($products as $product)
                        <li class="list-group-item my-3 shadow-lg">
                            <h4>{{$product->title}}</h4>
                            <p>{{$product->description}}</p>
                            <p>{{$product->amount}} PLN</p>
                            <div>
                                <ul>
                                    <li>Kategorie:</li>
                                    @foreach($product->categories as $category)
                                        <li>{{$category->title}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="d-flex">
                                <a href="{{route('product.edit', ['id' => $product->id])}}" class="btn-btn-info">Edytuj</a>
                                <form action="{{ route('product.delete', ['product' => $product->id]) }}" method="POST">
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