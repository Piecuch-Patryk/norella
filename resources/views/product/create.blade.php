@extends('layouts.app')
@section('title', 'Dodaj nową usługę')

@section('header')
<header class="container">
    <div class="row">
        <div class="col-12">
            <h1>Dodaj nową usługę</h1>
        </div>
    </div>
</header>
@endsection

@section('content')
    <main class="container">
        <div class="row">
            <div class="col-12 col-lg-6 mx-auto">
                <form method="POST" action="{{route('product.store')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="title" class="form-label">Nazwa usługi</label>
                      <input name="title" type="text" class="form-control" id="title" aria-describedby="emailHelp" value="{{old('title')}}">

                      @error('title')
                        <p class="text-danger">{{$message}}</p>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="description" class="form-label">Opis usługi</label>
                      <textarea name="description" id="description" cols="30" rows="10">{{old('title')}}</textarea>

                      @error('description')
                        <p class="text-danger">{{$message}}</p>
                      @enderror
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="form-label">Cena usługi</label>
                        <input name="amount" type="text" class="form-control" id="amount" aria-describedby="emailHelp" value="{{old('amount')}}">
  
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
                                    <input type="checkbox" value="{{$category->id}}" id="category{{$category->id}}" name="category[]">
                                </div>
                                @endforeach
                        </fieldset>

                        @error('category')
                          <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                        <button type="submit" class="btn btn-primary">Zapisz</button>
                        <a href="{{route('product.index')}}" class="btn btn-warning">Anuluj</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection