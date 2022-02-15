@push('styles')
    <link rel='stylesheet' href='{{asset('css/add_ph.css')}}'>
@endpush
@extends('layouts.main')
@section('content')
    <section class="info__phone">
        <div class="container">
            <div class="info_ph_content">
                <div class="info__ph_intro">
                    <h1>Ремонт iPhone</h1>
                    <p>
                        Выберите модель iPhone, чтобы узнать стоимость ремонта.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="add_phone">
        <div class="cotainer">
            <div class="add_phone_column">
                <div class="iphone__xx">
                    <img src="./img/categories/iphone.svg" alt="iphone">
                    <a href="#">iPhone 13</a>
                </div>
                <div class="iphone__xx">
                    <div class="add_photo_input">
                        <img src="./img/AddPhoto 1.svg" alt="photo">
                    </div>
                    <a href="#">Добавить фото</a>
                </div>
            </div>
        </div>
    </section>
    @include('partials.bottom-part')
@endsection
