@push('styles')
    <link rel='stylesheet' href='{{asset('css/categories.css')}}'>
@endpush
@extends('layouts.main')
@section('content')
    <div class="info__block mb-4">
        <div class="container">
            <div class="info__intro">
                <h1>Ремонт {{$category->name}}</h1>
                <p>Выберите модель {{$category->name}}, чтобы узнать стоимость ремонта.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="models__phone">
            @foreach($categories as $category)
                <div class="iphone__xx">
                    @if($category->image)
                        <img src="{{asset('storage/'.$category->image)}}" alt="iphone">
                    @endif
                    <a href="{{route('service', $category->id)}}">{{$category->name}}</a>
                </div>
            @endforeach
        </div>
    </div>
    @include('partials.bottom-part')
@endsection
