@extends('layout.master')

@section('content')

         <!-- header search start -->
         <div class="header-search-form-wrapper">
            <div class="xb-search-close xb-close"></div>
            <div class="header-search-container">
                <form role="search" class="search-form" action="#">
                    <input type="search"  class="search-field" placeholder="Search …" value="" name="s">
                </form>
            </div>
        </div>
        <div class="body-overlay"></div>
        <main>

            <!-- breadcrumb start -->
            <section class="breadcrumb pos-rel bg_img" data-background="assets/img/bg/breadcrumb_bg.jpg">
                <div class="container">
                    <div class="breadcrumb__content">
                        <h2 class="breadcrumb__title">Service details</h2>
                    </div>
                </div>
                <div class="breadcrumb__circle">
                    <span class="big" data-parallax='{"y" : 100, "scale" : 0.1}'></span>
                    <span class="small" data-parallax='{"y" : 100, "scale" : 0.1}'></span>
                </div>
                <div class="breadcrumb__shape">
                    <div class="shape shape--1">
                        <div class="shape-inner" data-parallax='{"x":-50,"y":80}'>
                            <img src="assets/img/shape/br_shape1.png" alt="">
                        </div>
                    </div>
                    <div class="shape shape--2">
                        <div class="shape-inner" data-parallax='{"x":50,"y":-90}'>
                            <img src="assets/img/shape/br_shape2.png" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb end -->
    
            <!-- service single start -->
            <section class="service-single pt-120 pb-130">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="sidebar-widget">
                                <div class="widget">
                                    <ul class="widget-category list-unstyled">
                                        <li><a href="coaching-single.html">VISA processing and application<span><img src="assets/img/icon/arrow_up.svg" alt=""></span></a></li>
                                        <li><a href="coaching-single.html">Immigration services<span><img src="assets/img/icon/arrow_up.svg" alt=""></span></a></li>
                                        <li><a href="coaching-single.html">Hotels and Flights appointments bookings/business<span><img src="assets/img/icon/arrow_up.svg" alt=""></span></a></li>
                                        <li><a href="coaching-single.html">residential settlement facilitation<span><img src="assets/img/icon/arrow_up.svg" alt=""></span></a></li>
                                    </ul>
                                </div>
                                <div class="widget">
                                    <h3>Downloads</h3>
                                    <ul class="widget-download ul_li_between list-unstyled">
                                        <li>
                                            <a href="#">
                                                <div class="xb-download">
                                                    <div class="xb-item--inner">
                                                        <div class="xb-item--icon">
                                                            <img src="assets/img/icon/pdf.svg" alt="">
                                                        </div>
                                                        <h4 class="xb-item--title">TOEFL <br> Application Form</h4>
                                                        <div class="xb-item--size">
                                                            3.9 KB
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="xb-download">
                                                    <div class="xb-item--inner">
                                                        <div class="xb-item--icon">
                                                            <img src="assets/img/icon/pdf.svg" alt="">
                                                        </div>
                                                        <h4 class="xb-item--title">Terms & <br> Conditions</h4>
                                                        <div class="xb-item--size">
                                                            3.9 KB
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget widget-banner text-center bg_img" data-background="assets/img/bg/b_bg.jpg">
                                    <img class="mb-40" src="assets/img/icon/services_icon.png" alt="">
                                    <h4>Assured Approval – <br> Guaranteed</h4>
                                    <a class="thm-btn" href="/contact">Get in Touch</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="single-content">
                                <h3>VISA processing and application.</h3>
                                <p>Avoid delays and issues in visa processing which can significantly affect your travel plans. With Duteni VISA, each visa category type – be it work permit processing, student visa application, or tourist visa processing – follows a unique timeline.</p>
                                <p>Duteni VISA will help you mitigate unwanted surprises and comprehending delays and allows for timely improvisation in case of a setback. Duteni VISA will help you maintain realistic expectations about the duration and procedure, thus improving the travel experience.</p>
                                <div class="single-img mt-35 mb-70">
                                    <img src="assets/img/coaching/c_single.jpg" alt="">
                                </div>
                                <h3>Why choose us?</h3>
                                <div class="single-content__feature ul_li">
                                    <div class="single-content-feature">
                                        <div class="xb-item--inner ul_li">
                                            <div class="xb-item--icon">
                                                <img src="assets/img/icon/profile-2user.svg" alt="">
                                            </div>
                                            <h3 class="xb-item--title">Global standards</h3>
                                        </div>
                                    </div>
                                    <div class="single-content-feature">
                                        <div class="xb-item--inner color-2 ul_li">
                                            <div class="xb-item--icon">
                                                <img src="assets/img/icon/book.svg" alt="">
                                            </div>
                                            <h3 class="xb-item--title">5-star service at all times</h3>
                                        </div>
                                    </div>
                                    <div class="single-content-feature">
                                        <div class="xb-item--inner color-3 ul_li">
                                            <div class="xb-item--icon">
                                                <img src="assets/img/icon/teacher.svg" alt="">
                                            </div>
                                            <h3 class="xb-item--title">Well-trained and exposed staff</h3>
                                        </div>
                                    </div>
                                    <div class="single-content-feature">
                                        <div class="xb-item--inner color-4 ul_li">
                                            <div class="xb-item--icon">
                                                <img src="assets/img/icon/briefcase.svg" alt="">
                                            </div>
                                            <h3 class="xb-item--title">International and local expertise</h3>
                                        </div>
                                    </div>
                                </div>
 
                               
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- service single end -->
    
           
    
            <!-- contact start -->
            <section class="contact contact-pt gray-bg">
                <div class="container">
                    <div class="xb-contact pos-rel">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="xb-item--inner">
                                    <div class="xb-item--holder mb-25">
                                        <span><img src="assets/img/icon/n_pad.svg" alt="">Contact Us</span>
                                        <h3>Do you have questions or went more <br> information?</h3>
                                    </div>
                                    <form class="xb-item--form contact-from" action="#!">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="xb-item--field">
                                                    <span><img src="assets/img/icon/c_user.svg" alt=""></span>
                                                    <input type="text" placeholder="Goladria Gomez">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="xb-item--field">
                                                    <span><img src="assets/img/icon/c_mail.svg" alt=""></span>
                                                    <input type="text" placeholder="e.visa@services.com">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="xb-item--field">
                                                    <span><img src="assets/img/icon/c_select.svg" alt=""></span>
                                                    <select name="select" id="nice-select">
                                                        <option value="1">Student Visa</option>
                                                        <option value="2">Tourist Visa</option>
                                                        <option value="3">Commercial Visa</option>
                                                        <option value="4">Residence Visa</option>
                                                        <option value="4">Working Visa</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="xb-item--field">
                                                    <span><img src="assets/img/icon/c_call.svg" alt=""></span>
                                                    <input type="text" placeholder="+888 -8867 3333">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="xb-item--field">
                                                    <span><img src="assets/img/icon/c_message.svg" alt=""></span>
                                                    <textarea name="message" id="message" cols="30" rows="10"
                                                                placeholder="Write Your Message..."></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button class="thm-btn" type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="google-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14602.254272231177!2d90.3654215!3d23.7985508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1592852423971!5m2!1sen!2sbd"></iframe>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact end -->
    
           </main>

@endsection