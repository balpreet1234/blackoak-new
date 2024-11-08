@extends('layouts.app')
@section('content')



    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="banner">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="contact_boxes py_8">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact_us">
                        <div class="contact_headingg">
                            <h2>Sending Us a Message</h2>
                            <p>Have a question or want to discuss your event needs? Feel free to reach out to us via
                                email
                                or phone.</p>
                        </div>
                        <div class="contactus_box">
                            <div class="icon_contact">
                                <i class="fa-solid fa-phone" style="color: #ffffff;"></i>
                            </div>
                            <div class="content_contact_box">
                                <h2>Call Now</h2>
                                <p>+ 9796256840</p>
                            </div>
                        </div>

                        <div class="contactus_box">
                            <div class="icon_contact">
                                <i class="fa-solid fa-envelope" style="color: #ffffff;"></i>
                            </div>
                            <div class="content_contact_box">
                                <h2>Email</h2>
                                <p>contact@blackoakexperience.com</p>
                                <p>sponsorship@blackoakexperience.com</p>
                                <p>bookings@blackoakexperience.com</p>
                            </div>
                        </div>
                        <div class="social_icons">
                            <a href="#"> <i class="fa-brands fa-facebook" style="color: #FF4006;"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram" style="color: #FF4006;"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact_form">
                        <h2>Get In Touch</h2>
                        <p>Contact us for a great photography session &amp; beautiful captured moments
                        </p>
                        <form>
                            <input type="text" id="fname" name="firstname" placeholder="Your name">
                            <input type="text" id="lname" name="lastname" placeholder="Your Email">
                            <input type="text" id="lname" name="lastname" placeholder="Your Number">
                            <textarea id="subject" name="subject" placeholder="Message..." style="height:150px"></textarea>
                            <a href="" class="btn_form_theme">Submit</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="google_map">
        <div class="container-fluid">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d107421.39394764749!2d74.77756283837418!3d32.71479169340353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391e84bf169d3525%3A0xf233488eeb8fd8d!2sJammu!5e0!3m2!1sen!2sin!4v1718704289862!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>



@endsection