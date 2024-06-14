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
        <section class="breadcrumb pos-rel bg_img" data-background="assets/img/bg/contactus_bg.jpg">
            <div class="breadcrumb__content">
                <h5 class="breadcrumb__title">Get intouch with Duteni Visa</h5>
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
        
        <!-- newsletter start -->
        <section class="newsletter">
            <div class="container">
                <div class="xb-newsletter pos-rel">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="xb-item--inner">
                                <div class="xb-item--holder mb-30">
                                    <span>newsletter</span>
                                    <h3>Subscribe to the free newsletter to receive the latest <br> news & case studies!
                                    </h3>
                                </div>
                                <form class="xb-item--form" action="#!">
                                    <input type="text" placeholder="Your e-mail address">
                                    <button class="thm-btn">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="xb-newsletter__img">
                        <img src="assets/img/bg/newsletter_img.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- newsletter end -->

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


    
    