@extends('layouts.app')
@section('title', 'Edytuj kategorię - ' . $category->title)

@section('header')
    <header class="custom--bg container-fluid d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-light">Edytuj: {{$category->title}}</h1>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <main class="container my-3">
        <div class="row">
            <div class="col-12 col-lg-6 mx-auto">
                <form method="POST" action="{{route('category.update', ['category' => $category->id])}}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                      <label for="title" class="form-label fw-bold">Nazwa kategorii</label>
                      <input name="title" type="text" class="form-control" id="title" aria-describedby="emailHelp" value="{{$category->title}}">
                      @error('title')
                        <p class="text-danger">{{$message}}</p>
                      @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label d-block fw-bold">Opis kategorii</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="w-100 p-2 rounded-1">{{$category->description}}</textarea>
                      @error('description')
                        <p class="text-danger">{{$message}}</p>
                      @enderror
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary me-3">Zapisz</button>
                        <a href="{{route('category.index')}}" class="btn btn-danger ms-3">Anuluj</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection