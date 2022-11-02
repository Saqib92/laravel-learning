@extends('layouts.app')
@section('title')
    Home
@stop
@section('content')

@section('css')
 <link rel="stylesheet" href="{{asset('assets/css/home/home.css')}}">
@stop
<div class="container">
    <div id="carouselExampleCaptions" class="carousel slide mb-5" data-bs-ride="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('assets/imgs/home-slider/slider1.jpg')}}" class="d-block w-100 slider-img" alt="slider image 1">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/imgs/home-slider/slider2.jpg')}}" class="d-block w-100 slider-img" alt="slider image 2">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/imgs/home-slider/slider3.jpg')}}" class="d-block w-100 slider-img" alt="slider image 3">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <x-alert>
            <x-slot:title>Najam Us Saqib</x-slot>
            <x-slot:desc>Hi, i am developer</x-slot>
        </x-alert>
    </div>
    <div class="col-md-4">
        <x-alert>
            <x-slot:title>Najam Us Saqib</x-slot>
            <x-slot:desc>Hi, i am developer</x-slot>
        </x-alert>
    </div>
    <div class="col-md-4">
        <x-alert>
            <x-slot:title>Najam Us Saqib</x-slot>
            <x-slot:desc>Hi, i am developer</x-slot>
        </x-alert>
    </div>
</div>


@endsection