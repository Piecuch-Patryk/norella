@extends('layouts.app')
@section('title', 'Edytuj usługę - ' . $product->title)

@section('header')
<header class="container">
    <div class="row">
        <div class="col-12">
            <h1>Edytuj uługę {{$product->title}}</h1>
        </div>
    </div>
</header>
@endsection

@section('content')
    <main class="container">
        <div class="row">
            <div class="col-12 col-lg-6 mx-auto">
                <form method="POST" action="{{route('product.update', ['product' => $product->id])}}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                      <label for="title" class="form-label">Nazwa usługi</label>
                      <input name="title" type="text" class="form-control" id="title" aria-describedby="emailHelp" value="{{$product->title}}">

                      @error('title')
                        <p class="text-danger">{{$message}}</p>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="description" class="form-label">Opis usługi</label>
                      <textarea name="description" id="description" cols="30" rows="10">{{$product->description}}</textarea>

                      @error('description')
                        <p class="text-danger">{{$message}}</p>
                      @enderror
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="form-label">Cena usługi [PLN]</label>
                        <input name="amount" type="text" class="form-control" id="amount" aria-describedby="emailHelp" value="{{$product->amount}}">
  
                        @error('amount')
                          <p class="text-danger">{{$message}}</p>
                        @enderror
                      </div>
                    <div>
                    <div class="mb-3">
                        <fieldset>
                            <legend>Wybierz kategorie:</legend>
                            @foreach($categories as $category)
                                <div>
                                    <label for="category{{$category->id}}">{{$category->title}}</label>
                                    <input type="checkbox" value="{{$category->id}}" id="category{{$category->id}}" name="category[]" {{(in_array($category->id, $prodCategories)) ? 'checked' : '' }}>
                                </div>
                            @endforeach
                        </fieldset>

                        @error('category')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Zapisz</button>
                        <a href="{{route('product.index')}}" class="btn btn-warning">Anuluj</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection