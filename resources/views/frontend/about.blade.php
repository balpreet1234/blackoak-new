@extends('layouts.app')
@section('content')

 <section class="banner">
        <div class="container">
            <div class="row">
                <div class="banner">
                    <h1>About Us</h1>
                </div>
            </div>
        </div>
    </section>

    <section class=" aboutus py_8 ">
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
                        <img src="{{asset('public/front_assets/img/about.jpg')}}" alt="" class="img-fluid">
                        <h2>WE MAKE</h2>
                        <h3>AWESOME EVENTS</h3>
                        <h4>FOR YOU</h4>
                    </div>
           

                </div>
      
            </div>
        </div>
        
    </section>
    <section class=" our_mission py_8">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 py-3">
                    <div class="box_about">
                        <div class="imagee">
                            <img src="{{asset('public/front_assets/img/mission.png')}}" alt="">
                        </div>
                        <div class="box_content_about">
                            <h2>Our Mission</h2>
                            <p>At Black Oak Experience, we believe in crafting unforgettable moments that transcend the
                                ordinary. Our mission is simple yet profound: to curate events that inspire, entertain,
                                and leave a lasting impact on all who attend.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 py-3">
                    <div class="image_box_about">
                        <img src="{{asset('public/front_assets/img/boxes_About.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4 py-3">
                    <div class="box_about">
                        <div class="imagee">
                            <img src="{{asset('public/front_assets/img/open-book.png')}}" alt="">
                        </div>
                        <div class="box_content_about">
                            <h2>Our Story</h2>
                            <p>In the heart of Jammu, Black Oak Experience emerged from a collective vision to redefine
                                event experiences. With an unwavering commitment to innovation and authenticity, we
                                embarked on a journey to bring the world to our doorstep, one event at a time.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 py-3">
                    <div class="image_box_about">
                        <img src="{{asset('public/front_assets/img/about_1.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4 py-3">
                    <div class="box_about">
                        <div class="imagee">
                            <img src="{{asset('public/front_assets/img/contract.png')}}" alt="">
                        </div>
                        <div class="box_content_about">
                            <h2>Our Signature</h2>
                            <p>Distinguished by our dedication to excellence, Black Oak Experience has curated over a
                                dozen events within just a year, each a testament to our passion for perfection. From
                                intimate gatherings to grand spectacles, we have seamlessly blended local charm with
                                global allure, hosting acclaimed artists from every corner of the globe.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 py-3">
                    <div class="image_box_about">
                        <img src="{{asset('public/front_assets/img/boxes_About.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4 py-3">
                    <div class="box_about">
                        <div class="imagee">
                            <img src="{{asset('public/front_assets/img/deal.png')}}" alt="">
                        </div>
                        <div class="box_content_about">
                            <h2>Our Promise</h2>
                            <p>At Black Oak Experience, we promise more than just events; we promise experiences that
                                transcend the ordinary. With meticulous attention to detail and an unwavering commitment
                                to excellence, we guarantee unforgettable moments that linger in the hearts and minds of
                                all who attend.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 py-3">
                    <div class="image_box_about">
                        <img src="{{asset('public/front_assets/img/boxes_About.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4 py-3">
                    <div class="box_about">
                        <div class="imagee">
                            <img src="{{asset('public/front_assets/img/rating.png')}}" alt="">
                        </div>
                        <div class="box_content_about">
                            <h2>Join the Experience</h2>
                            <p>As we continue to push the boundaries of possibility, Black Oak Experience invites you to
                                join us on this exhilarating journey. Whether you seek inspiration, entertainment, or
                                simply an escape from the mundane, let us transport you to a world of wonder and
                                excitement.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="form_blackoak py_8 pt-0">
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
                            <textarea id="subject" name="subject" placeholder="Message..."
                                style="height:150px"></textarea>
                            <!-- <input type="submit" value="Submit"> -->
                             <a href="" class="btn_form_theme">Submit</a>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="form_img">
                        <img src="{{asset('public/front_assets/img/form_pic.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection