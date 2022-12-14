@extends('layouts.app')
@section('title', 'Strona Główna')

@section('header')
    <header class="header--home text-center container-fluid position-sticky sticky-top d-flex flex-column justify-content-center px-sm-5 text-light">
        <div class="bg--color"></div>
        <div class="row">
            <div class="col-12 col-md-8 col-lg-6 px-3 text-md-start mt-md-5">
                <h1 class="mb-4 mb-md-5 mb-xl-3">Twoje Studio Urody</h1>
                <p class="mb-4 mb-md-5 fs-5">Dzięki pasji i długoletnim szkoleniom oferujemy Państwu profesjonalne usługi kosmetyczne na najwyższym poziome.</p>
                <a href="{{ route('product.index') }}" class="btn btn-light fw-bold">Nasza Oferta</a>
            </div>
            <div class="position-absolute header--sentence m-0 pb-3">
                <p class="m-0 text-light">Pozwól sobie na chwilę relaksu.</p>
                <a href="tel:+48239234854" class="text-light d-md-none">Umów wizytę</a>
            </div>
        </div>
        <aside class="header--aside d-none position-absolute d-lg-flex flex-column justify-content-center align-items-start text-center text-pink me-5">
            <div class="w-100 my-2">
                <h6 class="h5 m-0 text-dark">Zapraszamy</h6>
                <p class="m-0">Pn-Pt 10:00 - 18:00</p>
                <p class="m-0">Sobota 10:00 - 13:00</p>
            </div>

            <div class="w-100 my-2">
                <h6 class="h5 m-0 text-dark">Umów wizytę</h6>
                <p class="m-0">+48 639 382 902</p>
            </div>
            <div class="w-100 my-2">
                <h6 class="h5 m-0 text-dark">Lokalizacja</h6>
                <p class="m-0">Jana Matejki 9</p>
                <p class="m-0">Kędzierzyn-Koźle</p>
                <p class="m-0">47-220</p>
            </div>
            <div class="w-100">
                <a href="https://m.facebook.com/profile.php?id=100079326943177&sk=photos&_rdr" target="_blank" class="btn btn-primary py-1">Facebook</a>
            </div>
        </aside>
    </header>
@endsection

@section('aside')
<aside class="container-fluid bg-light">
    <div class="row">
        <ul class="d-flex justify-content-center justify-content-lg-around align-items-center w-100 p-0 py-5 m-0">
            <li class="flex--list--item m-3"><img src="{{ asset('storage/assets/home-page/logos/depilax.png') }}" class="w-100" alt="Depilax logo"></li>
            <li class="flex--list--item m-3"><img src="{{ asset('storage/assets/home-page/logos/farmona.jpg') }}" class="w-100" alt="Farmona logo"></li>
            <li class="flex--list--item m-3"><img src="{{ asset('storage/assets/home-page/logos/mollon.jpg') }}" class="w-100" alt="Mollon pro logo"></li>
            <li class="flex--list--item m-3"><img src="{{ asset('storage/assets/home-page/logos/norel.png') }}" class="w-100" alt="Norel - dr Wilsz logo"></li>
        </ul>
    </div>
</aside>
@endsection

@section('content')
<main class="main--content container-fluid mx-0 position-relative">
    <div class="row bg-light">
        <div class="col-12 text-center overflow-hidden pb-5 pt-2">
            <h2 class="title--decor position-relative d-inline-block text-pink fs-1 ms-3">Norella Poleca</h2>
        </div>
    </div>
    <div class="row category--wrap category--1">
        <div class="col-12 col-sm-10 col-md-8 col-lg-5 mx-sm-auto ms-md-4 py-md-4">
            <h2 class="text-center text-md-start text-light py-4">{{$category->title}}</h2>
            <ul class="list-group">
                @foreach ($products as $product)
                    <li class="list-group-item my-2 rounded-2">
                        <h5 class="text-pink fs-4">{{$product->title}}</h5>
                        <p>{{$product->description}}</p>
                        <p>{{$product->amount}} PLN</p>
                    </li>
                @endforeach
            </ul>
            <div class="text-center mb-3">
                <a href="{{route('category.show', ['id' => $category->id])}}" class="btn btn-sm btn-pink rounded-pill px-3 mt-3">Więcej</a>
            </div>
        </div>
    </div>
    <div class="row bg-light">
        <div class="col-12 col-md-7 col-lg-5 mx-md-auto text-center py-5 px-2">
            <p class="m-0 main--sentence py-lg-5">Dbamy o to, by klientki mogły u nas odpocząć od trosk dnia codziennego i poczuć, że czas spędzony w salonie jest tylko im poświęcony.</p>
        </div>
    </div>
    <div class="row bg-light">
        <div class="col-12 text-center overflow-hidden pb-5 pt-2">
            <h2 class="title--decor position-relative d-inline-block text-pink fs-1 ms-3">Kategorie Usług Norella</h2>
        </div>
    </div>
    <div class="row bg-light pb-5">
        <ul class="col-11 mx-auto list-group flex-lg-row justify-content-around align-items-start">
            @foreach ($categories as $category)
                <a href="{{route('category.show', ['id' => $category->id])}}" class="card-body p-4 text-decoration-none">
                    <h5 class="card-title text-decoration-underline">{{$category->title}}</h5>
                    <p class="card-text">{{$category->description}}</p>
                </a>
            @endforeach
        </ul>
    </div>

    <div class="row bg-light pb-5 overflow-hidden">
        <div class="col-12 mb-5 text-center">
            <h2 class="title--decor position-relative d-inline-block py-3 mb-0 text-pink">Opinie Naszych Klientów</h2>
        </div>
        <div class="col-12">
            <div id="carouselExampleFade" class="carousel slide carousel-fade bg-light" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @for ($i = 0; $i < count($reviews); $i++)
                        <div class="carousel-item bg-light {{ $i === 0 ? 'active' : '' }}">
                            <div class=" px-5 mx-md-5 text-center">
                                <h3 class="mb-3">{{ $reviews[$i]->name }}</h3>
                                <p class="mb-1">{{ $reviews[$i]->content }}</p>
                                <p class="mb-1 small text-muted">{{ $reviews[$i]->created_at->format('Y/m/d') }}</p>
                            </div>
                            <span id="pauseIcon" class="pause-icon"><i class="far fa-pause-circle"></i></span>
                        </div>
                    @endfor
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Poprzedni</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Następny</span>
                </button>
            </div>
        </div>
    </div>

    <div class="row bg-light pb-5">
        <div class="col-12 d-flex justify-content-center">
            <a href="{{route('review.create')}}" class="btn btn-sm btn-pink rounded-pill me-5">Dodaj opinię</a>
            <a href="{{route('review.index')}}" class="btn btn-sm btn-outline-info rounded-pill ms-5">Pokaż wszystkie</a>
        </div>
    </div>
</main>
@endsection