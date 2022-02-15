@extends('layouts.main')
@push('styles')
    <link rel='stylesheet' href='{{asset('css/style.css')}}'>
@endpush
@section('header-part')
    @include('partials.header')
@endsection
@section('content')
<section class="info__cards wow bounceInLeft data-wow-duration=" 5s>
    <div class="container">
        <div class="cards__ls">
            <div class="card__lk">
                <div class="info__card">
                    <img src="./img/card__ico/1.svg" alt="1">
                    <div class="card__intro">
                        <h1>Выезд</h1>
                        <p>
                            Время - деньги. Заказав переклейку или ремонт iphone у нас Вы можете сэкономить 3-4
                            часа
                            времени. Мастер приедет и произведет ремонт у вас дома или в офисе или заберет у вас
                            телефон,
                            потом доставит отремонтированный.
                        </p>
                    </div>
                </div>
                <div class="info__card">
                    <img src="./img/card__ico/2.svg" alt="2">
                    <div class="card__intro">
                        <h1>Выезд</h1>
                        <p>
                            Время - деньги. Заказав переклейку или ремонт iphone у нас Вы можете сэкономить 3-4
                            часа
                            времени. Мастер приедет и произведет ремонт у вас дома или в офисе или заберет у вас
                            телефон,
                            потом доставит отремонтированный.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card__lk">
                <div class="info__card">
                    <img src="./img/card__ico/1.svg" alt="1">
                    <div class="card__intro">
                        <h1>Выезд</h1>
                        <p>
                            Время - деньги. Заказав переклейку или ремонт iphone у нас Вы можете сэкономить 3-4
                            часа
                            времени. Мастер приедет и произведет ремонт у вас дома или в офисе или заберет у вас
                            телефон,
                            потом доставит отремонтированный.
                        </p>
                    </div>
                </div>
                <div class="info__card">
                    <img src="./img/card__ico/2.svg" alt="2">
                    <div class="card__intro">
                        <h1>Выезд</h1>
                        <p>
                            Время - деньги. Заказав переклейку или ремонт iphone у нас Вы можете сэкономить 3-4
                            часа
                            времени. Мастер приедет и произведет ремонт у вас дома или в офисе или заберет у вас
                            телефон,
                            потом доставит отремонтированный.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="reviews wow bounceInLeft data-wow-duration=" 5s>
    <div class="container">
        <div class="rev__intro">
            <h1>
                ОТЗЫВЫ
            </h1>
        </div>
    </div>
    <div class="rev__slider">
{{--        <div class="rev__block">
            <div class="rev__crd_intro">
                <img src="./img/yandex_logo.svg" alt="yandex">
                <h1>
                    Адам и Ева. Потерянный Рай
                </h1>
            </div>
            <div class="rev__block__content">
                <img src="./img/rev.svg" alt="rev">
                <hr>
                <p>
                    Рекомендуем данную организацию,
                    заказом довольны, все устроило.
                </p>
            </div>
        </div>
        <div class="rev__block">
            <div class="rev__crd_intro">
                <img src="./img/yandex_logo.svg" alt="yandex">
                <h1>
                    Адам и Ева. Потерянный Рай
                </h1>
            </div>
            <div class="rev__block__content">
                <img src="./img/rev.svg" alt="rev">
                <hr>
                <p>
                    Рекомендуем данную организацию,
                    заказом довольны, все устроило.
                </p>
            </div>
        </div>
        <div class="rev__block">
            <div class="rev__crd_intro">
                <img src="./img/yandex_logo.svg" alt="yandex">
                <h1>
                    Адам и Ева. Потерянный Рай
                </h1>
            </div>
            <div class="rev__block__content">
                <img src="./img/rev.svg" alt="rev">
                <hr>
                <p>
                    Рекомендуем данную организацию,
                    заказом довольны, все устроило.
                </p>
            </div>
        </div>
        <div class="rev__block big__scrn">
            <div class="rev__crd_intro">
                <img src="./img/yandex_logo.svg" alt="yandex">
                <h1>
                    Адам и Ева. Потерянный Рай
                </h1>
            </div>
            <div class="rev__block__content">
                <img src="./img/rev.svg" alt="rev">
                <hr>
                <p>
                    Рекомендуем данную организацию,
                    заказом довольны, все устроило.
                </p>
            </div>
        </div>--}}
        @foreach($reviews as $review)
            <div class="rev__block">
                <div class="rev__crd_intro">
                    @if($review->user && $review->user->avatar)
                        <img src="{{asset('storage/'.$review->user->avatar)}}" alt="yandex">
                        <h1>
                            {{$review->user->name}}
                        </h1>
                    @endif
                </div>
                <div class="rev__block__content">
                    @if($review->rate && $review->rate > 0)
                        <img src="{{asset('img/'.$review->rate.'star.png')}}" alt="rev">
                    @else
                        <img src="{{asset('img/rev.svg')}}" alt="rev">
                    @endif
                    <hr>
                    <p>
                      {{$review->text}}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</section>
<section class="article__block wow bounceInLeft data-wow-duration=" 5s>
    <div class="container">
        <div class="article__intro">
            <h1>Статьи</h1>
        </div>
        <div class="article__cards">
            @foreach($news as $new)
                <div class="art__card">
                    <img src="{{asset('storage/'.$new->image)}}" alt="photo">
                    <h1>{{$new->title}}</h1>
                    <p>
                        {{$new->text}}
                    </p>
                    <p class="art__date">
                        {{$new->created_at}}
                    </p>
                </div>
            @endforeach
   {{--         <div class="art__card">
                <img src="./img/article.svg" alt="photo">
                <h1>Госпли развития</h1>
                <p>
                    Госпли развития. В рамках спецификации современных стандартов, ключевые ...
                </p>
                <p class="art__date">
                    11.02.2020
                </p>
            </div>
            <div class="art__card wow bounceInLeft">
                <img src="./img/article.svg" alt="photo">
                <h1>Госпли развития</h1>
                <p>
                    Госпли развития. В рамках спецификации современных стандартов, ключевые ...
                </p>
                <p class="art__date">
                    11.02.2020
                </p>
            </div>
            <div class="art__card wow backInRight">
                <img src="./img/article.svg" alt="photo">
                <h1>Госпли развития</h1>
                <p>
                    Госпли развития. В рамках спецификации современных стандартов, ключевые ...
                </p>
                <p class="art__date">
                    11.02.2020
                </p>
            </div>
            <div class="art__card tw__break wow backInRight">
                <img src="./img/article.svg" alt="photo">
                <h1>Госпли развития</h1>
                <p>
                    Госпли развития. В рамках спецификации современных стандартов, ключевые ...
                </p>
                <p class="art__date">
                    11.02.2020
                </p>
            </div>--}}
        </div>
    </div>
    </div>
</section>
@endsection
