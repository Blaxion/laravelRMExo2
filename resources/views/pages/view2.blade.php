@extends('layout.index')
@section('main')

    <div id="carouselExampleControls" class="carousel slide vh-100" data-bs-ride="carousel">
        <div class="carousel-inner">
            @switch(Request::path())
                @case('/')
                <div class="carousel-item active">
                    <img src="{{asset('img/animal1.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/animal2.jpg')}}" class="d-block w-100" alt="...">
                </div>
                    @break
                @case('view2')
                <div class="carousel-item active">
                    <img src="{{asset('img/couleur1.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/couleur2.png')}}" class="d-block w-100" alt="...">
                </div>
                    @break
                @case('view3')
                <div class="carousel-item active">
                    <img src="{{asset('img/plat1.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/plat2.jpg')}}" class="d-block w-100" alt="...">
                </div>
                    @break
                @default
            @endswitch
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endsection
