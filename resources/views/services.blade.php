@push('styles')
    <link rel='stylesheet' href='{{asset('css/categories.css')}}'>
@endpush
@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="models__phone">
            @foreach($services as $service)
                    <div>
                        <div>{{$service->title}}</div>
                        <div>{{$service->description}}</div>
                    </div>
            @endforeach
        </div>
    </div>
    @include('partials.bottom-part')
@endsection
