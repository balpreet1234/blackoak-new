@extends('layouts.app')
@section('content')

<section class="banner">
        <div class="container">
            <div class="row">
                <div class="banner">
                    <h1>Events</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="upcoming_events_sec py_8">
        <div class="container">
            <div class="event_details_main d-flex justify-content-between align-items-center">
                <div class="event_details_main_hd">
                    <h2>Up Coming Events</h2>
                    <p>No Up Coming Events</p>
                </div>
                <!-- <div class="event_details_main_btn">
                    <a href="#">
                        <button type="button" class="btn web_btn"> Sold Out</button>
                    </a>
                </div> -->
            </div>
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-8 col-12 py-2">
                    <div class="slick_vertical_upcoming_event">
                        <div class="upcoming_events_slider">
                            <div class="text1"></div>
                            <div class="upcoming_events_slider_main">
                                <h3>VH1 Supersonic Holi</h3>
                                <p>Theme – White Party, TBA</p>
                            </div>
                            <div class="upcoming_events_loc_time">
                                <div class="upcoming_events_loc">
                                    <a href="#">
                                        <i class="fa-solid fa-location-dot"></i>
                                        <p>KC Emporia , Jammu</p>
                                    </a>
                                </div>
                                <div class="upcoming_events_time">
                                    <span>11:00 am
                                        onwards, March
                                        24, 2024</span>
                                </div>
                            </div>
                        </div>
                        <div class="upcoming_events_slider">
                            <div class="text1"></div>
                            <div class="upcoming_events_slider_main">
                                <h3>Bismil Ki Mehfil</h3>
                                <p>Theme – White Party, TBA</p>
                            </div>
                            <div class="upcoming_events_loc_time">
                                <div class="upcoming_events_loc">
                                    <a href="#">
                                        <i class="fa-solid fa-location-dot"></i>
                                        <p>Hari Niwas Palace , Jammu</p>
                                    </a>
                                </div>
                                <div class="upcoming_events_time">
                                    <span>7:00 pm
                                        onwards, February 25, 2024</span>
                                </div>
                            </div>
                        </div>
                        <div class="upcoming_events_slider">
                            <div class="text1"></div>
                            <div class="upcoming_events_slider_main">
                                <h3>Indo Warehouse</h3>
                                <p>Theme – White Party, TBA
                                </p>
                            </div>
                            <div class="upcoming_events_loc_time">
                                <div class="upcoming_events_loc">
                                    <a href="#">
                                        <i class="fa-solid fa-location-dot"></i>
                                        <p>Asia Greens Nagrota , Jammu</p>
                                    </a>
                                </div>
                                <div class="upcoming_events_time">
                                    <span>8:00 pm
                                        onwards, Saturday, January 20, 2024</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 py-2">
                    <div class="upcoming_events_img">
                        <img src="{{asset('public/front_assets/img/event-bg-2.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="image_carousel py_8">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="events_venue">
                        <h3> VH1 Supersonic Holi</h3>
                        <p>(24 March 2024)</p>
                        <p>Venue – KC Emporia, Jammu</p>
                    </div>

                </div>

                <div class="col-lg-9">
                    <div id="event_one" class="owl-carousel owl-theme">
                        <div class="items">
                            <img src="{{asset('public/front_assets/img/carosuel1.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{asset('public/front_assets/img/carosuel2.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{asset('public/front_assets/img/carosuel3.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{asset('public/front_assets/img/carosuel4.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{asset('public/front_assets/img/carosuel5.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{asset('public/front_assets/img/carosuel6.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{asset('public/front_assets/img/carosuel7.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{asset('public/front_assets/img/carosuel8.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{asset('public/front_assets/img/carosuel9.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{asset('public/front_assets/img/carosuel10.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{asset('public/front_assets/img/carosuel11.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{asset('public/front_assets/img/carosuel12.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 py-4">
                    <div id="event_two" class="owl-carousel owl-theme">
                        <div class="items">
                            <img src="{{asset('public/front_assets/img/bismil1.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{asset('public/front_assets/img/bismil2.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{asset('public/front_assets/img/bismil3.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{asset('public/front_assets/img/bismil4.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{asset('public/front_assets/img/bismil5.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{asset('public/front_assets/img/bismil6.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{asset('public/front_assets/img/bismil7.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{asset('public/front_assets/img/bismil8.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{asset('public/front_assets/img/bismil9.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{asset('public/front_assets/img/bismil10.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{asset('public/front_assets/img/bismil11.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 py-4">
                    <div class="events_venue">
                        <h3> Bismil Ki Mehfil</h3>
                        <p>(25 Feb. 2024)</p>
                        <p>Venue – Hari Niwas Palace, Jammu</p>
                    </div>

                </div>
                <div class="col-lg-3">
                    <div class="events_venue">
                        <h3>Indo Warehouse</h3>
                        <p>(20 Jan. 2024)</p>
                        <p>Venue – Forest Hill Resort, Chandigarh</p>
                    </div>

                </div>
                <div class="col-lg-9">
                    <div id="event_three" class="owl-carousel owl-theme">
                        <div class="items">
                            <img src="{{asset('public/front_assets/img/indo1.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{asset('public/front_assets/img/indo2.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{asset('public/front_assets/img/indo3.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{asset('public/front_assets/img/indo4.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{asset('public/front_assets/img/indo5.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{asset('public/front_assets/img/indo6.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{asset('public/front_assets/img/indo7.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{asset('public/front_assets/img/indo8.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="artist_section py_8 pt-0">
        <div class="container">
            <div class="row">
                <h2 class="artist">
                    Artist
                </h2>
                <div class="col-lg-3 col-md-3 col-12 py-2">
                    <div class="single_artist_img">
                        <img src="{{asset('public/front_assets/img/artist_imgs1.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12 py-2">
                    <div class="single_artist_img">
                        <img src="{{asset('public/front_assets/img/artist_imgs2.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12 py-2">
                    <div class="single_artist_img">
                        <img src="{{asset('public/front_assets/img/artist_imgs3.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12 py-2">
                    <div class="single_artist_img">
                        <img src="{{asset('public/front_assets/img/artist_imgs4.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12 py-2">
                    <div class="single_artist_img">
                        <img src="{{asset('public/front_assets/img/artist_imgs5.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12 py-2">
                    <div class="single_artist_img">
                        <img src="{{asset('public/front_assets/img/artist_imgs6.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12 py-2">
                    <div class="single_artist_img">
                        <img src="{{asset('public/front_assets/img/artist_imgs7.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12 py-2">
                    <div class="single_artist_img">
                        <img src="{{asset('public/front_assets/img/artist_imgs8.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection