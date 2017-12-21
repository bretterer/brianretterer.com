<?php get_header(); ?>
    <section id="header" class="header" style="background-image: url(<?php echo get_theme_mod( 'homepage_header_background_image' ); ?>);">
        <div class="overlay"></div>
        <div class="title">
            <h1><?php echo get_theme_mod('brianretterer_header_main_text'); ?></h1>
            <p class="type"></p>
        </div>
    </section>

    <?php if ( true === get_theme_mod('brianretterer_enable_section_about' ) ) : ?>
    <section id="about" class="about">
        <div class="container">
            <div class="title text-center">
                <h2 class="text-uppercase">About Me</h2>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg text-center">
                    <div class="about-img" style="background-image: url(<?php echo get_theme_mod( 'brianretterer_about_section_image' ); ?>);"></div>
                </div>
                <div class="col-md-12 col-lg">
                    <div class="tabs-about">
                        <ul class="nav nav-tabs text-center" id="myTab" role="tablist">

                            <!-- Start About Me Title Tab -->
                            <li class="nav-item">
                                <a class="nav-link active" id="about-tab" data-toggle="tab" href="#aboutme" role="tab" aria-controls="about" aria-expanded="true">
                                    <i class="manisa-male-user"></i>
                                    <span>About me</span>
                                </a>
                            </li>
                            <!-- End About Me Title Tab -->

                            <!-- ================ -->

                            <!-- Start Profile Title Tab -->
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">
                                    <i class="manisa-star"></i>
                                    <span>Profile</span>
                                </a>
                            </li>
                            <!-- End Profile Title Tab -->


                        </ul>
                        <div class="tab-content" id="myTabContent">

                            <!-- Start About Me Tab -->
                            <div class="tab-pane fade show active text-left" id="aboutme" role="tabpanel" aria-labelledby="about-tab">
                                <p><?php echo get_theme_mod('brianretterer_about_text'); ?></p>
                            </div>
                            <!-- End About Me Tab -->

                            <!-- ================ -->

                            <!-- Start Profile Tab -->
                            <div class="tab-pane fade text-left profile" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h6><span class="title-info">Name :</span><span>Brian Retterer</span></h6>
                                <h6><span class="title-info">Email : </span><span>brian@brianretterer.com</span></h6>
                                <h6><span class="title-info">Github : </span><span>
                                        <a href="https://github.com/bretterer">
                                            https://github.com/bretterer
                                        </a>
                                    </span>
                                </h6>
                                <h6><span class="title-info">Twitter : </span><span>
                                        <a href="https://twitter.com/bretterer">
                                            https://twitter.com/bretterer
                                        </a>
                                    </span>
                                </h6>
                            </div>
                            <!-- End Profile Tab -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <section class="educ">
        <div class="container">
            <div class="education">
                <div class="row">
                    <div class="col-lg col-md-12">
                        <div class="title first-timeline open-timeline">
                            <h3>Education</h3>
                            <!-- Start Education Number 1 -->
                            <div class="infos-educ">
                                <span class="roundtimeline"></span>
                                <div class="info-timeline">
                                    <h5>IT Engineer</h5>
                                    <span class="date">02/2014 - 12/2015</span>
                                    <span> | </span>
                                    <span class="job">envato</span>
                                    <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil</p>
                                    <span class="timeline-de"></span>
                                </div>
                            </div>
                            <!-- End Education Number 1 -->
                            <!-- ====================== -->
                            <!-- Star Education Number 2 -->
                            <div class="infos-educ">
                                <span class="roundtimeline"></span>
                                <div class="info-timeline">
                                    <h5>Specialization Course</h5>
                                    <span class="date">02/2014 - 12/2015</span>
                                    <span> | </span>
                                    <span class="job">envato</span>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                                    <span class="timeline-de"></span>
                                </div>
                            </div>
                            <!-- End Education Number 2 -->
                            <!-- ====================== -->
                            <!-- Star Education Number 3 -->
                            <div class="infos-educ">
                                <span class="roundtimeline"></span>
                                <div class="info-timeline">
                                    <h5>Frontend-developer</h5>
                                    <span class="date">02/2014 - 12/2015</span>
                                    <span> | </span>
                                    <span class="job">envato</span>
                                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit</p>
                                    <span class="timeline-de"></span>
                                </div>
                            </div>
                            <!-- End Education Number 3 -->
                        </div>
                    </div>
                    <div class="col-lg col-md-12">
                        <div class="title open-timeline">
                            <h3>Experience</h3>
                            <!-- Start Experience Number 1 -->
                            <div class="infos-educ">
                                <span class="roundtimeline"></span>
                                <div class="info-timeline">
                                    <h5>Frontend-developer</h5>
                                    <span class="date">11/2015 - Current</span>
                                    <span> | </span>
                                    <span class="job">envato</span>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                                    <span class="timeline-de"></span>
                                </div>
                            </div>
                            <!-- End Experience Number 1 -->
                            <!-- ====================== -->
                            <!-- Star Experience Number 2 -->
                            <div class="infos-educ">
                                <span class="roundtimeline"></span>
                                <div class="info-timeline">
                                    <h5>Web Designer</h5>
                                    <span class="date">01/2014 - 8/2015</span>
                                    <span> | </span>
                                    <span class="job">envato</span>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.</p>
                                    <span class="timeline-de"></span>
                                </div>
                            </div>
                            <!-- End Experience Number 2 -->
                            <!-- Star Education Number 3 -->
                            <div class="infos-educ">
                                <span class="roundtimeline"></span>
                                <div class="info-timeline">
                                    <h5>Graphic Designer</h5>
                                    <span class="date">09/2012 - 012/2013</span>
                                    <span> | </span>
                                    <span class="job">envato</span>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                                    <span class="timeline-de"></span>
                                </div>
                            </div>
                            <!-- End Education Number 3 -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="serv" class="serv text-center active-nav">
        <div class="container">
            <div class="title">
                <h2 class="text-uppercase">Services</h2>
            </div>
            <div class="row">
                <!-- Start Service Number 1 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="info-serv">
                        <i class="manisa-magic-wand"></i>
                        <h5>Web Design</h5>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus</p>
                    </div>
                </div>
                <!-- End Service Number 1 -->
                <!-- ====================== -->
                <!-- Start Service Number 2 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="info-serv">
                        <i class="manisa-photo"></i>
                        <h5>Photography</h5>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus</p>
                    </div>
                </div>
                <!-- End Service Number 2 -->
                <!-- ====================== -->
                <!-- Start Service Number 3 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="info-serv">
                        <i class="manisa-energy"></i>
                        <h5>Branding</h5>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus</p>
                    </div>
                </div>
                <!-- End Service Number 3 -->
                <!-- ====================== -->
                <!-- Start Service Number 4 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="info-serv last-info-serv">
                        <i class="manisa-layers"></i>
                        <h5>Management</h5>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus</p>
                    </div>
                </div>
                <!-- End Service Number 4 -->
                <!-- ====================== -->
                <!-- Start Service Number 5 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="info-serv last-info-serv">
                        <i class="manisa-settings"></i>
                        <h5>Development</h5>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus</p>
                    </div>
                </div>
                <!-- End Service Number 5 -->
                <!-- ====================== -->
                <!-- Start Service Number 6 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="info-serv last-info-serv">
                        <i class="manisa-headphones-microphone"></i>
                        <h5>Support</h5>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus</p>
                    </div>
                </div>
                <!-- End Service Number 6 -->
            </div>
        </div>
    </section>

    <section class="stat text-center">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 number">
                        <i class="manisa-heart"></i>
                        <span class="counter">1200</span>
                        <p>Happy Client</p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 number">
                        <i class="manisa-coffe"></i>
                        <span class="counter">154</span>
                        <p>Cup Of Coffee</p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 number">
                        <i class="manisa-star"></i>
                        <span class="counter">102</span>
                        <p>Successful Projects</p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 number">
                        <i class="manisa-cup"></i>
                        <span class="counter">320</span>
                        <p>Award Won</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="portfolio text-center">
        <div class="container">
            <div class="title">
                <h2 class="text-uppercase">Portfolio</h2>
            </div>
            <div class="shuffle">
                <ul class="list-unstyled">
                    <li data-class="all" class="item active">All</li>
                    <li data-class=".web" class="item">Web Design</li>
                    <li data-class=".graphic" class="item">Graphic Design</li>
                    <li data-class=".marketing" class="item">Marketing</li>
                </ul>
            </div>
            <div class="gallery">
                <div class="row">
                    <!-- Start Image Number 1 -->
                    <div class="col-lg-4 col-md-6 col-sm-12" style="opacity: 1; pointer-events: auto;">
                        <div class="item marketing">
                            <div class="over">
                                <div class="info-img">
                                    <h4 class="pattaya">Title Projet</h4>
                                    <span>Marketing</span>
                                </div>
                                <a href="http://manisa.eb2a.com/images/portfolio/01.jpg" data-lightbox="image-1" data-title="Project Title">
                                    <!-- ^ And Here -->
                                    <i class="fa fa-arrows-alt"></i>
                                </a>
                            </div>
                            <img src="http://manisa.eb2a.com/images/portfolio/01.jpg" alt="imgPort1" class="img-fluid">
                            <!-- Here ^ You Can Change image And Up -->
                        </div>
                    </div>
                    <!-- End Image Number 1 -->
                    <!-- ===================== -->
                    <!-- Start Image Number 2 -->
                    <div class="col-lg-4 col-md-6 col-sm-12" style="opacity: 1; pointer-events: auto;">
                        <div class="item graphic">
                            <div class="over">
                                <div class="info-img">
                                    <h4 class="pattaya">Title Projet</h4>
                                    <span>Graphic Design</span>
                                </div>
                                <a href="http://manisa.eb2a.com/images/portfolio/02.jpg" data-lightbox="image-1" data-title="Project Title">
                                    <!-- ^ And Here -->
                                    <i class="fa fa-arrows-alt"></i>
                                </a>
                            </div>
                            <img src="http://manisa.eb2a.com/images/portfolio/02.jpg" alt="imgPort1" class="img-fluid">
                            <!-- Here ^ You Can Change image And Up -->
                        </div>
                    </div>
                    <!-- End Image Number 2 -->
                    <!-- ===================== -->
                    <!-- Start Image Number 3 -->
                    <div class="col-lg-4 col-md-6 col-sm-12" style="opacity: 1; pointer-events: auto;">
                        <div class="item web">
                            <div class="over">
                                <div class="info-img">
                                    <h4 class="pattaya">Title Projet</h4>
                                    <span>Web Design</span>
                                </div>
                                <a href="http://manisa.eb2a.com/images/portfolio/03.jpeg" data-lightbox="image-1" data-title="Project Title">
                                    <!-- ^ And Here -->
                                    <i class="fa fa-arrows-alt"></i>
                                </a>
                            </div>
                            <img src="http://manisa.eb2a.com/images/portfolio/03.jpeg" alt="imgPort1" class="img-fluid">
                            <!-- Here ^ You Can Change image And Up -->
                        </div>
                    </div>
                    <!-- End Image Number 3 -->
                    <!-- ===================== -->
                    <!-- Start Image Number 4 -->
                    <div class="col-lg-4 col-md-6 col-sm-12" style="opacity: 1; pointer-events: auto;">
                        <div class="item marketing">
                            <div class="over">
                                <div class="info-img">
                                    <h4 class="pattaya">Title Projet</h4>
                                    <span>Marketing</span>
                                </div>
                                <a href="http://manisa.eb2a.com/images/portfolio/04.jpg" data-lightbox="image-1" data-title="Project Title">
                                    <!-- ^ And Here -->
                                    <i class="fa fa-arrows-alt"></i>
                                </a>
                            </div>
                            <img src="http://manisa.eb2a.com/images/portfolio/04.jpg" alt="imgPort1" class="img-fluid">
                            <!-- Here ^ You Can Change image And Up -->
                        </div>
                    </div>
                    <!-- End Image Number 4 -->
                    <!-- ===================== -->
                    <!-- Start Image Number 5 -->
                    <div class="col-lg-4 col-md-6 col-sm-12" style="opacity: 1; pointer-events: auto;">
                        <div class="item web">
                            <div class="over">
                                <div class="info-img">
                                    <h4 class="pattaya">Title Projet</h4>
                                    <span>Web Design</span>
                                </div>
                                <a href="http://manisa.eb2a.com/images/portfolio/05.jpg" data-lightbox="image-1" data-title="Project Title">
                                    <!-- ^ And Here -->
                                    <i class="fa fa-arrows-alt"></i>
                                </a>
                            </div>
                            <img src="http://manisa.eb2a.com/images/portfolio/05.jpg" alt="imgPort1" class="img-fluid">
                            <!-- Here ^ You Can Change image And Up -->
                        </div>
                    </div>
                    <!-- End Image Number 5 -->
                    <!-- ===================== -->
                    <!-- Start Image Number 6 -->
                    <div class="col-lg-4 col-md-6 col-sm-12" style="opacity: 1; pointer-events: auto;">
                        <div class="item graphic">
                            <div class="over">
                                <div class="info-img">
                                    <h4 class="pattaya">Title Projet</h4>
                                    <span>Graphic Design</span>
                                </div>
                                <a href="http://manisa.eb2a.com/images/portfolio/06.jpg" data-lightbox="image-1" data-title="Project Title">
                                    <!-- ^ And Here -->
                                    <i class="fa fa-arrows-alt"></i>
                                </a>
                            </div>
                            <img src="http://manisa.eb2a.com/images/portfolio/06.jpg" alt="imgPort1" class="img-fluid">
                            <!-- Here ^ You Can Change image And Up -->
                        </div>
                    </div>
                    <!-- End Image Number 6 -->
                    <!-- ===================== -->
                    <!-- Start Image Number 7 -->
                    <div class="col-lg-4 col-md-6 col-sm-12" style="opacity: 1; pointer-events: auto;">
                        <div class="item marketing less">
                            <div class="over">
                                <div class="info-img">
                                    <h4 class="pattaya">Title Projet</h4>
                                    <span>Marketing</span>
                                </div>
                                <a href="http://manisa.eb2a.com/images/portfolio/07.jpg" data-lightbox="image-1" data-title="Project Title">
                                    <!-- ^ And Here -->
                                    <i class="fa fa-arrows-alt"></i>
                                </a>
                            </div>
                            <img src="http://manisa.eb2a.com/images/portfolio/07.jpg" alt="imgPort1" class="img-fluid">
                            <!-- Here ^ You Can Change image And Up -->
                        </div>
                    </div>
                    <!-- End Image Number 7 -->
                    <!-- ===================== -->
                    <!-- Start Image Number 8 -->
                    <div class="col-lg-4 col-md-6 col-sm-12" style="opacity: 1; pointer-events: auto;">
                        <div class="item graphic less">
                            <div class="over">
                                <div class="info-img">
                                    <h4 class="pattaya">Title Projet</h4>
                                    <span>Graphic Design</span>
                                </div>
                                <a href="http://manisa.eb2a.com/images/portfolio/08.jpg" data-lightbox="image-1" data-title="Project Title">
                                    <!-- ^ And Here -->
                                    <i class="fa fa-arrows-alt"></i>
                                </a>
                            </div>
                            <img src="http://manisa.eb2a.com/images/portfolio/08.jpg" alt="imgPort1" class="img-fluid">
                            <!-- Here ^ You Can Change image And Up -->
                        </div>
                    </div>
                    <!-- End Image Number 8 -->
                    <!-- ===================== -->
                    <!-- Start Image Number 9 -->
                    <div class="col-lg-4 col-md-6 col-sm-12" style="opacity: 1; pointer-events: auto;">
                        <div class="item web less">
                            <div class="over">
                                <div class="info-img">
                                    <h4 class="pattaya">Title Projet</h4>
                                    <span>Web Design</span>
                                </div>
                                <a href="http://manisa.eb2a.com/images/portfolio/09.jpg" data-lightbox="image-1" data-title="Project Title">
                                    <!-- ^ And Here -->
                                    <i class="fa fa-arrows-alt"></i>
                                </a>
                            </div>
                            <img src="http://manisa.eb2a.com/images/portfolio/09.jpg" alt="imgPort1" class="img-fluid">
                            <!-- Here ^ You Can Change image And Up -->
                        </div>
                    </div>
                    <!-- End Image Number 9 -->
                </div>
                <a class="show-more btn-manisa">Show More</a>
                <a class="show-less btn-manisa">Show Less</a>
            </div>
        </div>
    </section>

    <section class="testim active-nav">
        <div class="container">
            <div class="slider-arrows"><span class="slick-prev slick-arrow" style="display: block;"> <i class="fa fa-angle-up"></i> </span><span class="slick-next slick-arrow" style="display: block;"> <i class="fa fa-angle-down"></i> </span></div>
        </div>
        <div class="testim-slider slick-initialized slick-slider">
            <!-- Start Slider Number 1 -->
            <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 4995px;"><div class="slide1 myslide slick-slide" data-slick-index="0" aria-hidden="true" style="width: 1665px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms linear;" tabindex="-1">
                        <div class="container">
                            <div class="quote-client text-center">
                                <i class="fa fa-quote-left"></i>
                                <div class="parg-quote">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit volupta</p>
                                    <span class="name">Joshua Earle</span>
                                </div>
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                    </div><div class="slide2 myslide slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" style="width: 1665px; position: relative; left: -1665px; top: 0px; z-index: 999; opacity: 1;" tabindex="0">
                        <div class="container">
                            <div class="quote-client text-center">
                                <i class="fa fa-quote-left"></i>
                                <div class="parg-quote">
                                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil</p>
                                    <span class="name">John Doe</span>
                                </div>
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                    </div><div class="slide3 myslide slick-slide" data-slick-index="2" aria-hidden="true" style="width: 1665px; position: relative; left: -3330px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms linear;" tabindex="-1">
                        <div class="container">
                            <div class="quote-client text-center">
                                <i class="fa fa-quote-left"></i>
                                <div class="parg-quote">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus</p>
                                    <span class="name">Matthew Dix</span>
                                </div>
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                    </div></div></div>
            <!-- End Slider Number 1 -->
            <!-- ===================== -->
            <!-- Start Slider Number 2 -->

            <!-- End Slider Number 2 -->
            <!-- ===================== -->
            <!-- Start Slider Number 3 -->

            <!-- End Slider Number 3 -->
        </div>
    </section>

    <section id="price" class="price text-center">
        <div class="container">
            <div class="title">
                <h2 class="text-uppercase">Pricing</h2>
            </div>
            <div class="row">
                <!-- Start Price Table Number 1 -->
                <div class="col-lg col-sm-12">
                    <div class="pricing-table">
                        <span class="myprice">59</span>
                        <span class="description">per month</span>
                        <hr>
                        <ul class="pricing-list list-unstyled">
                            <li>Lorem ipsum dolor</li>
                            <li>At vero eos et accusamus</li>
                            <li>Nam libero tempore</li>
                            <li>Reiciendis voluptatibus</li>
                        </ul>
                        <hr>
                        <div class="pricing-button">
                            <a href="#contact">Hire me</a>
                        </div>
                    </div>
                </div>
                <!-- End Price Table Number 1 -->
                <!-- ===================== -->
                <!-- Start Price Table Number 2 -->
                <div class="col-lg col-sm-12">
                    <div class="pricing-table">
                        <span class="myprice">89</span>
                        <span class="description">per month</span>
                        <hr>
                        <ul class="pricing-list list-unstyled">
                            <li>Lorem ipsum dolor</li>
                            <li>At vero eos et accusamus</li>
                            <li>Nam libero tempore</li>
                            <li>Reiciendis voluptatibus</li>
                            <li>Sed ut perspiciatis unde</li>
                        </ul>
                        <hr>
                        <div class="pricing-button">
                            <a href="#contact">Hire me</a>
                        </div>
                    </div>
                </div>
                <!-- End Price Table Number 2 -->
                <!-- ===================== -->
                <!-- Start Price Table Number 3 -->
                <div class="col-lg col-sm-12">
                    <div class="pricing-table last-pricing">
                        <span class="myprice">42</span>
                        <span class="description">per month</span>
                        <hr>
                        <ul class="pricing-list list-unstyled">
                            <li>Lorem ipsum dolor</li>
                            <li>At vero eos et accusamus</li>
                            <li>Nam libero tempore</li>
                        </ul>
                        <hr>
                        <div class="pricing-button">
                            <a href="#contact">Hire me</a>
                        </div>
                    </div>
                </div>
                <!-- End Price Table Number 2 -->
            </div>
        </div>
    </section>

    <section id="client" class="client text-center active-nav">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg col-md-6 col-6">
                        <img src="http://manisa.eb2a.com/images/clients/brand_1.png" alt="client1" class="img-fluid">
                        <!-- Here you can edit the image of the Client -->
                    </div>
                    <div class="col-lg col-md-6 col-6">
                        <img src="http://manisa.eb2a.com/images/clients/brand_2.png" alt="client1" class="img-fluid">
                        <!-- Here you can edit the image of the Client -->
                    </div>
                    <div class="col-lg col-md-6 col-6">
                        <img src="http://manisa.eb2a.com/images/clients/brand_3.png" alt="client1" class="img-fluid">
                        <!-- Here you can edit the image of the Client -->
                    </div>
                    <div class="col-lg col-md-6 col-6">
                        <img src="http://manisa.eb2a.com/images/clients/brand_4.png" alt="client1" class="img-fluid">
                        <!-- Here you can edit the image of the Client -->
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Start Blog -->
<?php
$sticky = get_option( 'sticky_posts' );
$args = array(
    'posts_per_page' => 3,
    'post__in'  => $sticky
);
$stickyPosts = new WP_Query( $args );
if ( isset($sticky[0]) ) :
    switch(count($sticky)) {
        case 1 :
            $stickyCardClass = 'offset-lg-3 col-lg-6 col-md-12';
            break;
        case 2 :
            $stickyCardClass = 'col-lg-6 col-md-12';
            break;
        default :
            $stickyCardClass = 'col-lg-4 col-md-12';
    }
   ?>
    <section id="blog" class="blog text-center featured-posts">
        <div class="container">
            <div class="title">
                <h2 class="text-uppercase">
                    Featured <?php echo _n( 'Post', 'Posts', count( $sticky ), 'brianretterer'); ?>
                </h2>
            </div>
            <div class="row">
                <?php
                while ( $stickyPosts->have_posts() ) : $stickyPosts->the_post();
                    ?>
                    <div class="<?php echo $stickyCardClass; ?>">
                        <?php
                        get_template_part('template-parts/post/card');
                        ?>
                    </div>
                    <?php
                endwhile;
                ?>
            </div>
        </div>
    </section>
    <?php
endif;
?>
<?php
$recentPosts = new WP_Query( [
    'posts_per_page' => 3,
    'ignore_sticky_posts' => 1
]);
if($recentPosts->have_posts()) :
    ?>
    <section id="blog" class="blog text-center">
        <div class="container">
            <div class="title">
                <h2 class="text-uppercase">Blog</h2>
            </div>
            <div class="row">
                <?php
                while ( $recentPosts->have_posts() ) : $recentPosts->the_post();
                    ?>
                    <div class="col-lg-4 col-md-12">
                        <?php
                        get_template_part('template-parts/post/card');
                        ?>
                    </div>
                    <?php
                endwhile;
                ?>
            </div>
            <?php if ( $postsPage = (int) get_option( 'page_for_posts' ) ) : ?>
            <a href="<?php echo get_page_link( $postsPage ); ?>" class="btn-manisa">See More</a>
            <?php endif; ?>
        </div>
    </section>
    <?php
    wp_reset_postdata();
endif;
?>
    <!-- End Blog -->

    <section id="contact" class="contact text-center">
        <div class="container">
            <div class="title">
                <h2 class="text-uppercase">Get In Touch</h2>
            </div>
            <div class="contact-content">
                <div class="row">
                    <div class="col-lg col-sm-4">
                        <div class="email">
                            <i class="manisa-envelope"></i>
                            <span>manisa@email.com</span>
                        </div>
                    </div>
                    <div class="col-lg col-sm-4">
                        <div class="phone">
                            <i class="manisa-call-end"></i>
                            <span>+123 456 7899</span>
                        </div>
                    </div>
                    <div class="col-lg col-sm-4">
                        <div class="address">
                            <i class="manisa-pointer"></i>
                            <span>123 Street Name, City , 32008</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-section">
            <div class="contact-map maps" id="overlay">
                <div class="google-wrapper">
                    <div id="google-map"> <!-- Your Can Add Your Location Just Go To Google Map And Emped Map -->
<!--                        <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d162778.81964475298!2d-73.93891815355539!3d40.703660465248056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY!5e0!3m2!1sen!2s!4v1491335061565" class="scrolloff"></iframe>-->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d98154.72483812929!2d-84.14001762038679!3d39.754582908067064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1512018265844" class="scrolloff"></iframe>
                    </div>
                    <div class="container">
                        <div class="contact-form">
                            <form id="my_form" method="post" onsubmit="submitForm(); return false;">
                                <div class="form-group">
                                    <input id="name" class="form-control" type="text" name="name" placeholder="Your Name" required="">
                                </div>
                                <div class="form-group">
                                    <input id="email" class="form-control" type="email" name="email" placeholder="E-mail" required="">
                                </div>
                                <div class="form-group">
                                    <input id="phone" class="form-control" type="phone" name="phone" placeholder="Your Phone">
                                </div>
                                <div class="message">
                                    <div class="form-group">
                                        <textarea id="msg" class="form-control" placeholder="Write Your message here ..." required=""></textarea>
                                    </div>
                                    <p><input id="btn" class="btn" type="submit" value="Send Message"><span id="status"></span></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>