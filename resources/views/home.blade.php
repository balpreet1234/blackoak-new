    @extends('layouts.app')
    @section('content')

        


    <section class="home_banner">
        <div class="container">
            <div class="row">
                <div class="banner_content">
                    <h1 class="ms-banner__bg-title">
                        Blackoak Experience
                    </h1>
                    <p class="bigevent">UP COMING BIG EVENTS</p>
                    <h2 class="creating">CREATING INEFFABLE</h2>
                    <h2 class="moments">MOMENTS THROUGH METICULOUSLY </h2>
                    <h2 class="meticulously">CURATED EXPERIENCES</h2>
                </div>
            </div>
        </div>
    </section>

    <section class=" aboutus py_8 pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="about_section">

                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-5 ">
                                <div class="box">
                                    <div class="count-num">12</div>
                                    <p>Events Hosted</p>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-5">
                                <div class="box">
                                    <div class="count-num">
                                        <span>5500</span>
                                    </div>
                                    <p>Tickets Sold</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-7">
                    <div class="about_section">
                        <h2>About Us</h2>
                        <p>Black Oak Experience, a pioneering force in the events industry, stands as a testament to the
                            fusion of creativity and excellence. Founded just a year ago, our journey has been nothing
                            short of remarkable, leaving an indelible mark on the cultural landscape of Jammu.
                        </p>
                    </div>

                </div>

            </div>
            <div class="col-lg-12">
                <div class="main_live_Session">
                    <div class="image_about">
                        <img src="{{ asset('public/front_assets/img/about_new.png')}}" alt="" class="img-fluid">
                        <h2>LIVE YOUR LIFE</h2>
                        <h3>ACCORDING TO</h3>
                        <h4>YOUR WISH.</h4>
                    </div>


                </div>

            </div>
        </div>

    </section>

    <section class="upcoming_events_sec py_8 pb-0">
        <div class="container">
            <div class="event_details_main d-flex justify-content-between align-items-center">
                <div class="event_details_main_hd">
                    <h2>Up Coming Events</h2>
                    <p>No Up Coming Events</p>
                </div>
                <div class="event_details_main_btn">
                    <a href="#">
                        <button type="button" class="btn web_btn"> See More Events</button>
                    </a>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-12 col-12 py-2">
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
                <div class="col-lg-4 col-md-12 col-12 py-2">
                    <div class="upcoming_events_img">
                        <img src="{{ asset('public/front_assets/img/tickect_Section.jpg')}}" alt="" class="img-fluid">
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
                            <img src="{{ asset('public/front_assets/img/carosuel1.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{ asset('public/front_assets/img/carosuel2.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{ asset('public/front_assets/img/carosuel3.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{ asset('public/front_assets/img/carosuel4.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{ asset('public/front_assets/img/carosuel5.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{ asset('public/front_assets/img/carosuel6.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{ asset('public/front_assets/img/carosuel7.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{ asset('public/front_assets/img/carosuel8.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{ asset('public/front_assets/img/carosuel9.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{ asset('public/front_assets/img/carosuel10.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{ asset('public/front_assets/img/carosuel11.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{ asset('public/front_assets/img/carosuel12.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 py-4">
                    <div id="event_two" class="owl-carousel owl-theme">
                        <div class="items">
                            <img src="{{ asset('public/front_assets/img/bismil1.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{ asset('public/front_assets/img/bismil2.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{ asset('public/front_assets/img/bismil3.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{ asset('public/front_assets/img/bismil4.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{ asset('public/front_assets/img/bismil5.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{ asset('public/front_assets/img/bismil6.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{ asset('public/front_assets/img/bismil7.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{ asset('public/front_assets/img/bismil8.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{ asset('public/front_assets/img/bismil9.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{ asset('public/front_assets/img/bismil10.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{ asset('public/front_assets/img/bismil11.jpg')}}" alt="">
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
                            <img src="{{ asset('public/front_assets/img/indo1.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{ asset('public/front_assets/img/indo2.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{ asset('public/front_assets/img/indo3.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{ asset('public/front_assets/img/indo4.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{ asset('public/front_assets/img/indo5.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{ asset('public/front_assets/img/indo6.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{ asset('public/front_assets/img/indo7.jpg')}}" alt="">
                        </div>
                        <div class="items">
                            <img src="{{ asset('public/front_assets/img/indo8.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="what-we-do py_8">
        <div class="container">
            <div class="what_we_do_heading">
                <h2>What We Do</h2>
                <p>Experience unforgettable moments at Blackoak. From corporate events to bachelorette parties, our
                    lounge bar and VIP services cater to every occasion. Let us make your birthday celebration
                    extraordinary. Discover more about our offerings today!</p>
            </div>
            <div class="row">
                <div class="col-lg-4 pt-5">
                    <div class="what_we_do_boxes">
                        <div class="icon_we_do">
                            <i class="fa-solid fa-calendar-days" style="color: #FF4006;"></i>
                        </div>
                        <div class="content_we_do">
                            <h3>Event Management</h3>
                        </div>
                        <!-- <div class="button">
                                <a href="#">Read More</a>
                            </div> -->
                    </div>
                </div>
                <div class="col-lg-4 pt-5">
                    <div class="what_we_do_boxes">
                        <div class="icon_we_do">
                            <i class="fa-solid fa-users " style="color: #FF4006;"></i>
                        </div>
                        <div class="content_we_do">
                            <h3>Talent Booking</h3>
                        </div>
                        <!-- <div class="button">
                                <a href="#">Read More</a>
                            </div> -->
                    </div>
                </div>
                <div class="col-lg-4 pt-5">
                    <div class="what_we_do_boxes">
                        <div class="icon_we_do">
                            <i class="fa-regular fa-user" style="color: #FF4006;"></i>
                        </div>
                        <div class="content_we_do">
                            <h3>Artist Management</h3>
                        </div>
                        <!-- <div class="button">
                                <a href="#">Read More</a>
                            </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="what_we_offer py_8">
        <div class="container">
            <div class="heading_offer">
                <h2>WHAT WE OFFERS</h2>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="main_offer_session">
                        <div class="under_flx_session">
                            <div class="img_offering">
                                <img src="{{ asset('public/front_assets/img/offer1.webp')}}" alt="">
                            </div>
                            <div class="txt_offer">
                                <h2>Drinks All Night</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat sunt
                                    ad doloremque beatae nobis quidem suscipit esse
                                    nihil neque omnis vitae aperiam tenetur, ullam, quod deserunt molestias
                                    placeat id?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="main_offer_session">
                        <div class="under_flx_session">
                            <div class="img_offering">
                                <img src="{{ asset('public/front_assets/img/offer2.webp')}}" alt="">
                            </div>
                            <div class="txt_offer">
                                <h2>Bottle Service</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat sunt
                                    ad doloremque beatae nobis quidem suscipit esse
                                    nihil neque omnis vitae aperiam tenetur, ullam, quod deserunt molestias
                                    placeat id?</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="main_offer_session">
                        <div class="under_flx_session">
                            <div class="img_offering">
                                <img src="{{ asset('public/front_assets/img/offer3.webp')}}" alt="">
                            </div>
                            <div class="txt_offer">
                                <h2>top DJ's night</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat sunt
                                    ad doloremque beatae nobis quidem suscipit esse
                                    nihil neque omnis vitae aperiam tenetur, ullam, quod deserunt molestias
                                    placeat id?</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="main_offer_session">
                        <div class="under_flx_session">
                            <div class="img_offering">
                                <img src="{{ asset('public/front_assets/img/offer5.webp')}}" alt="">
                            </div>
                            <div class="txt_offer">
                                <h2>song request's</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat sunt
                                    ad doloremque beatae nobis quidem suscipit esse
                                    nihil neque omnis vitae aperiam tenetur, ullam, quod deserunt molestias
                                    placeat id?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about_our_club py_8">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="about_club_img">
                        <img src="{{ asset('public/front_assets/img/carosuel2.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="under_about_club">
                        <h2>ABOUT OUR CLUB</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet quasi ut dignissimos reprehenderit
                            consequuntur expedita delectus provident voluptatibus dolorem harum sed libero nulla molestiae
                            temporibus, modi illo adipisci, pariatur id?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet quasi ut dignissimos reprehenderit
                            consequuntur expedita delectus provident voluptatibus dolorem harum sed libero nulla molestiae
                            temporibus, modi illo adipisci, pariatur id?</p>
                        <div class="main_ul_li">
                            <ul class="dm_about_link dm_cover">
                                <li> History Scince 1993</li>
                                <li> 25 Bodyguards For Security</li>
                                <li>Best CCTV Systems</li>
                                <li> Dog Security </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="form_blackoak py_8">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-7">
                    <div class="booknow_Form">
                        <h2>BOOK NOW!</h2>
                        <p>Welcome to Black Oak Experience—where every moment is an adventure waiting to unfold.
                        </p>
                        <form>
                            <input type="text" id="fname" name="firstname" placeholder="Your name">
                            <input type="text" id="lname" name="lastname" placeholder="Your Email">
                            <input type="text" id="lname" name="lastname" placeholder="Your Number">
                            <textarea id="subject" name="subject" placeholder="Message..." style="height:150px"></textarea>
                            <!-- <input type="submit" value="Submit"> -->
                            <a href="#" class="btn_form_theme">Submit</a>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="form_img">
                        <img src="{{ asset('public/front_assets/img/form_pic.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer_top_slide py_8">
        <div class="container">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="main_icon">
                        <img src="{{ asset('public/front_assets/img/icon_1.png')}}" alt="">
                    </div>

                </div>
                <div class="item">
                    <div class="main_icon">
                        <img src="{{ asset('public/front_assets/img/icon_2.png')}}" alt="">
                    </div>
                </div>

                <div class="item">
                    <div class="main_icon">
                        <img src="{{ asset('public/front_assets/img/icon_3.png')}}" alt="">
                    </div>
                </div>

                <div class="item">
                    <div class="main_icon">
                        <img src="{{ asset('public/front_assets/img/icon_4.png')}}" alt="">
                    </div>
                </div>

                <div class="item">
                    <div class="main_icon">
                        <img src="{{ asset('public/front_assets/img/icon_5.png')}}" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="main_icon">
                        <img src="{{ asset('public/front_assets/img/icon_2.png')}}" alt="">
                    </div>
                </div>

                <div class="item">
                    <div class="main_icon">
                        <img src="{{ asset('public/front_assets/img/icon_3.png')}}" alt="">
                    </div>
                </div>

                <div class="item">
                    <div class="main_icon">
                        <img src="{{ asset('public/front_assets/img/icon_4.png')}}" alt="">
                    </div>
                </div>

                <div class="item">
                    <div class="main_icon">
                        <img src="{{ asset('public/front_assets/img/icon_5.png')}}" alt="">
                    </div>
                </div>



            </div>

    </section>

@endsection