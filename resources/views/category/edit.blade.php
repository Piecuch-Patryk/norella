@extends('layouts.app')
@section('title', 'Edytuj kategorię - ' . $category->title)

@section('header')
<header class="container">
    <div class="row">
        <div class="col-12">
            <h1>Edytuj kategorię {{$category->title}}</h1>
        </div>
    </div>
</header>
@endsection

@section('content')
    <main class="container">
        <div class="row">
            <div class="col-12 col-lg-6 mx-auto">
                <form method="POST" action="{{route('category.update', ['category' => $category->id])}}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                      <label for="title" class="form-label">Nazwa kategorii</label>
                      <input name="title" type="text" class="form-control" id="title" aria-describedby="emailHelp" value="{{$category->title}}">

                      @error('title')
                        <p class="text-danger">{{$message}}</p>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="description" class="form-label">Opis kategorii</label>
                      <textarea name="description" id="description" cols="30" rows="10">{{$category->description}}</textarea>

                      @error('description')
                        <p class="text-danger">{{$message}}</p>
                      @enderror
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Zapisz</button>
                        <a href="{{route('category.index')}}" class="btn btn-warning">Anuluj</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection