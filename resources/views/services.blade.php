@push('styles')
    <link rel='stylesheet' href='{{asset('css/categories.css')}}'>
@endpush
@extends('layouts.main')
@section('content')
    <div class="container">
        <div style="margin-top: 50px">
            @foreach($services as $service)
                    <div style="padding:10px;margin: 10px; border:1px solid black">
                        <div>{{$service->title}}</div>
                        <div>{{$service->description}}</div>
                    </div>
            @endforeach
                <hr>
        </div>
    </div>

@endsection
