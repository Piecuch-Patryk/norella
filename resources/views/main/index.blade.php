@extends('layouts.app')
@section('title', 'Strona Główna')

@section('header')
    <header class="header--home text-center container-fluid position-sticky sticky-top d-flex flex-column justify-content-center px-sm-5 text-light">
        <div class="bg--color"></div>
        <div class="row">
            <div class="col-12 col-md-8 col-lg-6 px-3 text-md-start mt-md-5">
                <h1 class="mb-4 mb-md-5 mb-xl-3">Twoje Studio Urody</h1>
                <p class="mb-4 mb-md-5">Dzięki pasji i długoletnim szkoleniom oferujemy Państwu profesjonalne usługi kosmetyczne na najwyższym poziome.</p>
                <a href="#" class="btn btn-light fw-bold">Nasza Oferta</a>
            </div>
            <div class="position-absolute header--sentence m-0 pb-3">
                <p class="m-0 text-light">Pozwól sobie na chwilę relaksu.</p>
                <a href="tel:+48239234854" class="text-light d-md-none">Umów wizytę</a>
            </div>
        </div>
        <aside class="header--aside d-none position-absolute d-lg-flex flex-column justify-content-center align-items-start text-center text-pink">
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
                <a href="" class="btn btn-primary py-1">Facebook</a>
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
    <div class="row">
        <div class="col-12 text-center text-md-start overflow-hidden">
            <h2 class="title--decor position-relative d-inline-block py-3 mb-0 text-pink">Norella Poleca</h2>
        </div>
    </div>


</main>
@endsection