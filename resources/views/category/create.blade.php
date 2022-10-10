@extends('layouts.app')
@section('title', 'Dodaj nową kategorię')

@section('header')
<header class="container">
    <div class="row">
        <div class="col-12">
            <h1>Dodaj nową kategorię</h1>
        </div>
    </div>
</header>
@endsection

@section('content')
    <main class="container">
        <div class="row">
            <div class="col-12 col-lg-6 mx-auto">
                <form method="POST" action="{{route('category.store')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="title" class="form-label">Nazwa kategorii</label>
                      <input name="title" type="text" class="form-control" id="title" aria-describedby="emailHelp" value="{{old('title') ? old('title') : ''}}">

                      @error('title')
                        <p class="text-danger">{{$message}}</p>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="description" class="form-label">Opis kategorii</label>
                      <textarea name="description" id="description" cols="30" rows="10">{{old('title') ? old('title') : ''}}</textarea>

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