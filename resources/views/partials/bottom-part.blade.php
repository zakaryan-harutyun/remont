@inject('reviews', 'App\Models\Review')
@inject('news', 'App\Models\News')


<section style="margin-top: 50px;" class="info__cards wow bounceInLeft data-wow-duration=" 5s>
    <div class="container">
        <div class="cards__ls">
            <div class="card__lk">
                <div class="info__card">
                    <img src="{{asset('img/card__ico/2.svg')}}" alt="1">
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
                    <img src="{{asset('img/card__ico/3.svg')}}" alt="2">
                    <div class="card__intro">
                        <h1>Качество</h1>
                        <p>
                            Наши мастера имеют 10+ лет опыта работы в области переклейки и ремонта Iphone. Работая с нами, Вы можете быть совершенно уверены в том, что ваш телефон в надежных и опытных руках.

                        </p>
                    </div>
                </div>
            </div>
            <div class="card__lk">
                <div class="info__card">
                    <img src="{{asset('img/card__ico/1.svg')}}" alt="1">
                    <div class="card__intro">
                        <h1>Цены</h1>
                        <p>
                            Наши цены ниже среднерыночных, несмотря на то, что качество работы на самом высшем уровне. Несмотря на то, что мы используем только оригинальные зап. части. Мы любим свою работу, работаем много и это позволяет предлагать лучшие на рынке условия.
                        </p>
                    </div>
                </div>
                <div class="info__card">
                    <img src="{{asset('img/card__ico/4.svg')}}" alt="2">
                    <div class="card__intro">
                        <h1>Сроки работы</h1>
                        <p>
                            Мы пунктуальны и ответственны. Называем срок работы с запасом и выполняем работу почти всегда раньше обещанного срока, а ровно в срок сдаем тогда, когда происходят непредвиденные обстоятельства.
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
        @foreach($reviews->get() as $review)
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
            @foreach($news->get() as $new)
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
