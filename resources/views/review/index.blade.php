@extends('layouts.app')
@section('title', 'Komentarze klientów')

@section('header')
    <header class="custom--bg container-fluid d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-light">Opinie naszych klientów</h1>
                <p class="text-center text-light">Twoja opinia ma znaczenie, serdecznie zapraszamy do podzielenia się Twoimi spostrzeżeniami.</p>
            </div>
        </div>
    </header>
@endsection

@section('content')
<main class="container-fluid">
    <div class="row mt-3">
        @if(session('message'))
            <div class="col-12">
                <p class="text-success text-center">{{session('message')}}</p>
            </div>
        @endif
        <div class="col-12 text-center">
            <a href="{{ route('review.create') }}" class="btn btn-pink">Dodaj opinię</a>
        </div>
    </div>

    <div class="row px-2">
        @foreach ($reviews as $review)
            <div class="col-12 col-md-7 mx-md-auto border box-shadow-pink rounded my-3 p-3">
                <h2 class="mb-3">{{ $review->name }}</h2>
                <p class="mb-1">{{ $review->content }}</p>
                <p class="mb-1 small text-muted text-right">{{ $review->created_at->format('Y/m/d') }}</p>
                @auth    
                <div class="text-right">
                    <form action="{{route('review.delete', ['review' => $review])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Usuń opinię</button>
                    </form>
                </div>
                @endauth
            </div>
        @endforeach
        <div class="col-12 col-md-7 mx-auto">
            {{$reviews->links()}}
        </div>
    </div>
</main>
@endsection