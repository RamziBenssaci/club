@extends('layouts.app',['page'=>'home'])

@section('content')
    <!-- strat main -->
    <main>
        <!-- strat bg-section -->
        <section class="bg-section">
            <div class="container1">
                <div class="card-bg-section">
                    <div class="Content-bg-section">
                        <h3>
                            {{$news[0]->title}}
                        </h3>
                        <p>
                            {{Str::limit(strip_tags($news[0]->body),250)}}
                        </p>
                        <a href="{{ route('web.posts.show', $news[0]->slug) }}">
                            <button>
                                <span>متابعة الخبر</span>
                                <i class="fa fa-arrow-up routut-icon"></i>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end bg-section -->
        <!-- strat match -->
        <section class="match" data-aos="fade-up" data-aos-duration="1000">

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach($matches as  $index => $m)
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{$index}}" class="{{$index==0?'active':''}}"></li>
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach($matches as  $index => $match)
                        <div class="carousel-item {{$index==0?'active':''}}">
                            <div class="container1">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-4">
                                        <div class="Player-name">
                                            <img src="{{ asset('frontend/img/logo.svg') }}" alt="">
                                            <br><br>
                                            <h4>
                                                نادي قريات
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4">
                                        <div class="Player-name">
                                            <h3>                                              
                                              المباراة القادمة  
                                          </h3>    
                                            <img src="/frontend/img/Group 57567.svg" class="editStyle-Image" alt="">
                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4">
                                        <div class="Player-name">
                                            <img src="{{ getImg('clubs/' . $match->opponent_team_logo) }}" alt="">
                                            <br><br>
                                            <h4>
                                                {{$match->opponent_team}}
                                            </h4>
                                        </div>

                                    </div>
                                </div>
                                   <div class="flex-info-match">
                                    <div class="card-right-info">
                                        <img src="/frontend/img/Mask Group 1258.png" alt="">
                                        <h6>
                                            {{$match->competition_name}}
                                        </h6>
                                    </div>
                                     <div class="card-center-info">
                                        <img src="/frontend/img/studum.png" alt="">
                                        <h6>
                                            {{$match->match_place}}
                                        </h6>
                                    </div>
                                    <div  class="card-left-info">
                                        <img src="/frontend/img/Mask Group 1257.svg" alt="">
                                        <h6>
                                            {{$match->match_at}}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

        </section>
        <!-- end match -->
        <!-- strat news -->
        <section class="news">
            <div class="container1">
                <div class="row">
                    <div class="col-sm-12 col-md-7 col-lg-8" data-aos="fade-up" data-aos-anchor-placement="up-center">
                        @forelse ($news as $new)
                            <div class="carding-new-palyer">
                                <div class="inline-flex-carding">
                                    <article class="image-inline">
                                        <img src="{{ $new->image }}" class="w-100" alt="">
                                    </article>
                                    <article class="content-carding">
                                        <div class="flex-title-carding">
                                            
                                            <p>
                                                {{$new->created_at->format('Y-m-d')}}
                                            </p>
                                        </div>
                                        <h4>
                                            {{ Str::limit($new->title,60) }}
                                        </h4>
                                        <p class="style-prag">
                                            {!! Str::limit($new->body,150)  !!}
                                        </p>
                                        <a href="{{ route('web.posts.show', $new->slug) }}">
                                            <button>
                                                <span>متابعة الخبر</span>
                                                <i class="fa fa-arrow-up routut-icon routut-icon"></i>
                                            </button>
                                        </a>
                                    </article>
                                </div>
                            </div>
                        @empty
                            <div class="col text-center">
                                <img src="{{ asset('images/empty-box.png') }}" width="100px"/>
                            </div>
                        @endforelse
                    </div>
                    <!-- --------- -->
                    <div class="col-sm-12 col-md-5 col-lg-4" data-aos="flip-left"
                         data-aos-easing="ease-out-cubic"
                         data-aos-duration="1000">
                        <div class="card-lastNew-club">
                            <div class="flex-title-news-reef">
                                <span></span>
                                <h2>
                                    أخبار النادي
                                </h2>
                            </div>

                            <div class="image-bg-last-new">
                                <div class="pos-content">
                                    <h4>
                                        نادي قريات
                                    </h4>
                                    <h5>
                                        أخبار نادي قريات أول بأول
                                    </h5>
                                    <a href="{{ route('web.posts.index') }}">
                                        <button>
                                            <span>متابعة الخبر</span>
                                            <i class="fa fa-arrow-up routut-icon"></i>
                                        </button>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- -------------- -->
                <!-- start silder news -->

                <div class="slide-container1 swiper" data-aos="fade-down"
                     data-aos-easing="linear"
                     data-aos-duration="1500">
                    <div class="flex-title-silder">
                        <h4>
                            قناة نادي قريات
                        </h4>
                        <article>
                            <span class="fa fa-arrow-left swiper-button-prev"></span>
                            <span class="fa fa-arrow-right swiper-button-next"></span>


                        </article>
                    </div>
                    <div class="slide-content">
                        <div class="card-wrapper swiper-wrapper">
                          

                            {{-- here --}}
                        </div>
                    </div>


                    <div class="swiper-pagination"></div>
                </div>

                <!-- end silder news -->
            </div>
        </section>
        <!-- end news -->
        <!-- start client -->
        <section class="client" data-aos="fade-up"
                 data-aos-anchor-placement="top-bottom">
            <div class="container1">
                <div class="text-heading">
                    <h4>
                        الشركاء الرسميون
                    </h4>
                </div>
                <div class="row">
                    @forelse($sponsors as $sponsor)
                        <div class="col-sm-12 col-md-4 col-lg-2">
                            <div class="box-client">
                                <img src="{{ $sponsor->image }}" alt="">
                            </div>
                        </div>
                    @empty
                        <h4 class="text-center">
                            لايوجد بيانات
                        </h4>
                    @endforelse
                </div>
            </div>
        </section>
        <!-- end client -->
        <!-- start contact -->
        <section class="contact" data-aos="fade-up"
                 data-aos-anchor-placement="top-bottom">
            <div class="container1">
                <div class="content-contact">
                    <h4 style="text-align:center">
                        كن متابع لاخبار نادي قريات على مواقع التواصل الاجتماعي
                    </h4>
                    <div class="flex-icon">
                        <a href="mailto:{{ $club->email }}">
                            <div class="box-icon first-bg">
                                <span class="fa fa-envelope"></span>
                            </div>
                        </a>
                        <a href="tel:{{ $club->phone }}">
                            <div class="box-icon tow-bg">
                                <span class="fa fa-phone-alt"></span>
                            </div>
                        </a>
                        <a href="{{ $club->instagram_link }}">
                            <div class="box-icon three-bg">
                                <span class="fab fa-instagram"></span>
                            </div>
                        </a>
                        <a href="{{ $club->twitter_link }}">
                            <div class="box-icon four-bg">
                                <span class="fab fa-twitter"></span>
                            </div>
                        </a>
                        <a href="{{ $club->facebook_link }}">
                            <div class="box-icon five-bg">
                                <span class="fab fa-youtube"></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end contact -->
    </main>
    <!-- end main -->

@endsection
