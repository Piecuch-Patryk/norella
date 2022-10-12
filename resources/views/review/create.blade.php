@extends('layouts.app')
@section('title', 'Dodaj opinię')

@section('header')
    <header class="custom--bg container-fluid d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-light">Twoja opinia ma dla nas znaczenie</h1>
            </div>
        </div>
    </header>
@endsection

@section('content')
<main class="container-fluid">
    <div class="row px-2 mb-5">
        <div class="col-12 col-md-5 mx-md-auto border border-pink rounded px-3 py-5">
            <form action="{{ route('review.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <input id="name" name="name" type="text" class="form-control" value="{{ old('name') }}" placeholder="Imię">
                    @error('name')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <textarea name="content" id="content" rows="7" class="form-control" placeholder="Treść opinii">{{ old('content') }}</textarea>
                    @error('content')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group text-center">
                    <button class="btn bnt-sm btn-success text-light px-5">Zapisz</button>
                </div>
            </form>
        </div>
    </div>

</main>
@endsection