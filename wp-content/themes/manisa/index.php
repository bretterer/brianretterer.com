<!DOCTYPE html>
<html lang="en">
<head>

    <!-- meta Data -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- title -->
    <title>Manisa - Personal One Page Template</title>

    <?php wp_head(); ?>

    <script>
        // Ajax function

        function _(id) {

            return document.getElementById(id);

        }

        function submitForm() {

            _("btn").disabled = true;
            _("status").innerHTML = 'please wait ...';

            var formdata = new FormData(),
                ajax = new XMLHttpRequest();

            formdata.append("name", _("name").value);
            formdata.append("email", _("email").value);
            formdata.append("phone", _("phone").value);
            formdata.append("msg", _("msg").value);

            ajax.open("POST", "contact.php");
            ajax.onreadystatechange = function () {

                if (ajax.readyState === 4 && ajax.status === 200) {

                    if (ajax.responseText === "success") {

                        _("my_form").innerHTML = '<h2>Thanks ' + _("name").value + ',<br> <br> your message has been sent.</h2>';

                    } else {

                        _("status").innerHTML = ajax.responseText;
                        _("btn").disabled = false;

                    }
                }
            };

            ajax.send(formdata);
        }
    </script>
</head>
<body <?php body_class(); ?>>

<!-- Start Social Media -->

<div class="social-media d-none d-md-block">
    <a href="https://www.facebook.com/" target="_blank"><i class="manisa-facebook"></i></a> <!-- You Can Edit the link here -->
    <a href="https://www.twitter.com/" target="_blank"><i class="manisa-twitter"></i></a> <!-- You Can Edit the link here -->
    <a href="https://www.tumblr.com/" target="_blank"><i class="manisa-tumblr"></i></a> <!-- You Can Edit the link here -->
    <a href="https://www.youtube.com/" target="_blank"><i class="manisa-youtube"></i></a> <!-- You Can Edit the link here -->
    <a href="https://www.dribbble.com/" target="_blank"><i class="manisa-dribbble"></i></a> <!-- You Can Edit the link here -->
</div>

<!-- End Social Media -->

<!-- Start Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light">

    <div class="container">
        <a href="#">
            <span class="bg_logo"></span>
            <!-- You Can Edit the image on main.css file just search ( bg_logo ) -->
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="menu">
                <span class="line1"></span>
                <span class="line2"></span>
                <span class="line3"></span>
            </div>
        </button>

        <?php if ( has_nav_menu( 'main' ) ) : ?>
                <?php wp_nav_menu( array(
                    'theme_location' => 'main',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'navbarSupportedContent',
                    'menu_class' => 'navbar-nav ml-auto',
                ) ); ?>
        <?php endif; ?>

    </div>
</nav>
<div class="nav-toggle">
    <div class="menu">
        <span class="line1"></span>
        <span class="line2"></span>
        <span class="line3"></span>
    </div>
</div>
<!-- End Navbar -->


<!-- Start Header -->
<section id="header" class="header">
    <div class="overlay"></div>
    <div class="title">
        <h1>Hi! i am <span class="pattaya">Manisa</span></h1>
        <p class="type"></p>  <!-- You Can Edit the title on the custom.js File -->
        <a href="#portfolio" class="btn-manisa">My Portfolio</a>
    </div>
    <div class="down">
        <a href="#about"><i class="manisa-mouse"></i></a>
    </div>
</section>

<!-- End Header -->


<!-- Start About -->
<section id="about" class="about">
    <div class="container">
        <div class="title text-center">
            <h2 class="text-uppercase">About Me</h2>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg text-center">
                <div class="about-img"></div>
                <!-- go to main.scss file to edit personal image -->
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

                        <!-- ================ -->

                        <!-- Start Skills Title Tab -->
                        <li class="nav-item">
                            <a class="nav-link" id="skill-tab" data-toggle="tab" href="#skill" role="tab" aria-controls="skill">
                                <i class="manisa-magic-wand"></i>
                                <span>Skills</span>
                            </a>
                        </li>
                        <!-- End Skills Title Tab -->
                    </ul>
                    <div class="tab-content" id="myTabContent">

                        <!-- Start About Me Tab -->
                        <div class="tab-pane fade show active text-left" id="aboutme" role="tabpanel" aria-labelledby="about-tab">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua labo ris nisi ut aliquip ex ea commodo consequat.</p>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <p>Hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                            <img src="https://via.placeholder.com/200x50" class="img-fluid signature" alt="signature"/>
                            <!-- Here image Signature -->
                        </div>
                        <!-- End About Me Tab -->

                        <!-- ================ -->

                        <!-- Start Profile Tab -->
                        <div class="tab-pane fade text-left profile" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <h6><span class="title-info">Name :</span><span>Manisa Smith</span></h6> <!-- Edit Your Name  -->
                            <h6><span class="title-info">Nationality : </span><span>Moroccan</span></h6> <!-- Edit Your Nationality  -->
                            <h6><span class="title-info">Email : </span><span>manisa@email.com</span></h6> <!-- Edit Your Email  -->
                            <h6><span class="title-info">Date of birth : </span><span>09-30-1991</span></h6> <!-- Edit Your Date Of Birth  -->
                            <h6><span class="title-info">Phone : </span><span>+123 456 7890</span></h6> <!-- Edit Your Phone -->

                            <a href="#" class="btn-manisa">Download Resume</a>
                        </div>
                        <!-- End Profile Tab -->

                        <!-- ================ -->

                        <!-- Start Skills Tab -->
                        <div class="tab-pane fade skill" id="skill" role="tabpanel" aria-labelledby="skill-tab">
                            <div class="skills">
                                <p class="progress-text">Html</p> <!-- Here You Can Edit The Name Of Skill -->
                                <div class="progress">
                                    <div class="progress-bar" data-present="85%"></div> <!-- Here You Can Edit The Percentage -->
                                </div>
                                <p class="progress-text">Photoshop</p> <!-- Here You Can Edit The Name Of Skill -->
                                <div class="progress">
                                    <div class="progress-bar" data-present="70%"></div> <!-- Here You Can Edit The Percentage -->
                                </div>
                                <p class="progress-text">Javascript</p> <!-- Here You Can Edit The Name Of Skill -->
                                <div class="progress">
                                    <div class="progress-bar" data-present="60%"></div> <!-- Here You Can Edit The Percentage -->
                                </div>
                                <p class="progress-text">Php</p> <!-- Here You Can Edit The Name Of Skill -->
                                <div class="progress">
                                    <div class="progress-bar" data-present="80%"></div> <!-- Here You Can Edit The Percentage -->
                                </div>
                            </div>
                            <a href="#" class="btn-manisa">Hire me</a>
                        </div>
                        <!-- End Skills Tab -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End About -->


<!-- Start JOBS & EDUCATION -->
<section class="educ">
    <div class="container">
        <div class="education">
            <div class="row">
                <div class="col-lg col-md-12">
                    <div class="title first-timeline">
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
                    <div class="title">
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

<!-- End JOBS & EDUCATION  -->


<!-- Start Services -->
<section id="services" class="serv text-center">
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

<!-- End Services -->


<!-- Start Stat -->
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

<!-- End Stat -->


<!-- Start Portfolio  -->
<section id="portfolio" class="portfolio text-center">
    <div class="container">
        <div class="title">
            <h2 class="text-uppercase">Portfolio</h2>
        </div>
        <div class="shuffle">
            <ul class="list-unstyled">
                <li data-class="all" class="active item">All</li>
                <li data-class=".web" class="item">Web Design</li>
                <li data-class=".graphic" class="item">Graphic Design</li>
                <li data-class=".marketing" class="item">Marketing</li>
            </ul>
        </div>
        <div class="gallery">
            <div class="row">
                <!-- Start Image Number 1 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item marketing">
                        <div class="over">
                            <div class="info-img">
                                <h4 class="pattaya">Title Projet</h4>
                                <span>Marketing</span>
                            </div>
                            <a href="https://via.placeholder.com/4000x3500" data-lightbox="image-1" data-title="Project Title">
                                <!-- ^ And Here -->
                                <i class="fa fa-arrows-alt"></i>
                            </a>
                        </div>
                        <img src="https://via.placeholder.com/4000x3500" alt="imgPort1" class="img-fluid">
                        <!-- Here ^ You Can Change image And Up -->
                    </div>
                </div>
                <!-- End Image Number 1 -->
                <!-- ===================== -->
                <!-- Start Image Number 2 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item graphic">
                        <div class="over">
                            <div class="info-img">
                                <h4 class="pattaya">Title Projet</h4>
                                <span>Graphic Design</span>
                            </div>
                            <a href="https://via.placeholder.com/4000x3500" data-lightbox="image-1" data-title="Project Title">
                                <!-- ^ And Here -->
                                <i class="fa fa-arrows-alt"></i>
                            </a>
                        </div>
                        <img src="https://via.placeholder.com/4000x3500" alt="imgPort1" class="img-fluid">
                        <!-- Here ^ You Can Change image And Up -->
                    </div>
                </div>
                <!-- End Image Number 2 -->
                <!-- ===================== -->
                <!-- Start Image Number 3 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item web">
                        <div class="over">
                            <div class="info-img">
                                <h4 class="pattaya">Title Projet</h4>
                                <span>Web Design</span>
                            </div>
                            <a href="https://via.placeholder.com/4000x3500" data-lightbox="image-1" data-title="Project Title">
                                <!-- ^ And Here -->
                                <i class="fa fa-arrows-alt"></i>
                            </a>
                        </div>
                        <img src="https://via.placeholder.com/4000x3500" alt="imgPort1" class="img-fluid">
                        <!-- Here ^ You Can Change image And Up -->
                    </div>
                </div>
                <!-- End Image Number 3 -->
                <!-- ===================== -->
                <!-- Start Image Number 4 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item marketing">
                        <div class="over">
                            <div class="info-img">
                                <h4 class="pattaya">Title Projet</h4>
                                <span>Marketing</span>
                            </div>
                            <a href="https://via.placeholder.com/4000x3500" data-lightbox="image-1" data-title="Project Title">
                                <!-- ^ And Here -->
                                <i class="fa fa-arrows-alt"></i>
                            </a>
                        </div>
                        <img src="https://via.placeholder.com/4000x3500" alt="imgPort1" class="img-fluid">
                        <!-- Here ^ You Can Change image And Up -->
                    </div>
                </div>
                <!-- End Image Number 4 -->
                <!-- ===================== -->
                <!-- Start Image Number 5 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item web">
                        <div class="over">
                            <div class="info-img">
                                <h4 class="pattaya">Title Projet</h4>
                                <span>Web Design</span>
                            </div>
                            <a href="https://via.placeholder.com/4000x3500" data-lightbox="image-1" data-title="Project Title">
                                <!-- ^ And Here -->
                                <i class="fa fa-arrows-alt"></i>
                            </a>
                        </div>
                        <img src="https://via.placeholder.com/4000x3500" alt="imgPort1" class="img-fluid">
                        <!-- Here ^ You Can Change image And Up -->
                    </div>
                </div>
                <!-- End Image Number 5 -->
                <!-- ===================== -->
                <!-- Start Image Number 6 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item graphic">
                        <div class="over">
                            <div class="info-img">
                                <h4 class="pattaya">Title Projet</h4>
                                <span>Graphic Design</span>
                            </div>
                            <a href="https://via.placeholder.com/4000x3500" data-lightbox="image-1" data-title="Project Title">
                                <!-- ^ And Here -->
                                <i class="fa fa-arrows-alt"></i>
                            </a>
                        </div>
                        <img src="https://via.placeholder.com/4000x3500" alt="imgPort1" class="img-fluid">
                        <!-- Here ^ You Can Change image And Up -->
                    </div>
                </div>
                <!-- End Image Number 6 -->
                <!-- ===================== -->
                <!-- Start Image Number 7 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item marketing less">
                        <div class="over">
                            <div class="info-img">
                                <h4 class="pattaya">Title Projet</h4>
                                <span>Marketing</span>
                            </div>
                            <a href="https://via.placeholder.com/4000x3500" data-lightbox="image-1" data-title="Project Title">
                                <!-- ^ And Here -->
                                <i class="fa fa-arrows-alt"></i>
                            </a>
                        </div>
                        <img src="https://via.placeholder.com/4000x3500" alt="imgPort1" class="img-fluid">
                        <!-- Here ^ You Can Change image And Up -->
                    </div>
                </div>
                <!-- End Image Number 7 -->
                <!-- ===================== -->
                <!-- Start Image Number 8 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item graphic less">
                        <div class="over">
                            <div class="info-img">
                                <h4 class="pattaya">Title Projet</h4>
                                <span>Graphic Design</span>
                            </div>
                            <a href="https://via.placeholder.com/4000x3500" data-lightbox="image-1" data-title="Project Title">
                                <!-- ^ And Here -->
                                <i class="fa fa-arrows-alt"></i>
                            </a>
                        </div>
                        <img src="https://via.placeholder.com/4000x3500" alt="imgPort1" class="img-fluid">
                        <!-- Here ^ You Can Change image And Up -->
                    </div>
                </div>
                <!-- End Image Number 8 -->
                <!-- ===================== -->
                <!-- Start Image Number 9 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item web less">
                        <div class="over">
                            <div class="info-img">
                                <h4 class="pattaya">Title Projet</h4>
                                <span>Web Design</span>
                            </div>
                            <a href="https://via.placeholder.com/4000x3500" data-lightbox="image-1" data-title="Project Title">
                                <!-- ^ And Here -->
                                <i class="fa fa-arrows-alt"></i>
                            </a>
                        </div>
                        <img src="https://via.placeholder.com/4000x3500" alt="imgPort1" class="img-fluid">
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

<!-- End Portfolio -->


<!-- Start Tesim -->
<section class="testim">
    <div class="container">
        <div class="slider-arrows"></div>
    </div>
    <div class="testim-slider">
        <!-- Start Slider Number 1 -->
        <div class="slide1 myslide">
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
        </div>
        <!-- End Slider Number 1 -->
        <!-- ===================== -->
        <!-- Start Slider Number 2 -->
        <div class="slide2 myslide">
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
        </div>
        <!-- End Slider Number 2 -->
        <!-- ===================== -->
        <!-- Start Slider Number 3 -->
        <div class="slide3 myslide">
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
        </div>
        <!-- End Slider Number 3 -->
    </div>
</section>

<!-- End Tesim -->


<!-- Start Price -->
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

<!-- End Price -->


<!-- Start Client -->

<section id="client" class="client text-center">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg col-md-6 col-6">
                    <img src="https://via.placeholder.com/87x109" alt="client1" class="img-fluid"/>
                    <!-- Here you can edit the image of the Client -->
                </div>
                <div class="col-lg col-md-6 col-6">
                    <img src="https://via.placeholder.com/87x109" alt="client2" class="img-fluid"/>
                    <!-- Here you can edit the image of the Client -->
                </div>
                <div class="col-lg col-md-6 col-6">
                    <img src="https://via.placeholder.com/87x109" alt="client3" class="img-fluid"/>
                    <!-- Here you can edit the image of the Client -->
                </div>
                <div class="col-lg col-md-6 col-6">
                    <img src="https://via.placeholder.com/87x109" alt="client4" class="img-fluid"/>
                    <!-- Here you can edit the image of the Client -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End Client -->


<!-- Start Blog -->

<section id="blog" class="blog text-center">
    <div class="container">
        <div class="title">
            <h2 class="text-uppercase">Blog</h2>
        </div>
        <div class="row">
            <!-- Start Blog Number 1 -->
            <div class="col-lg-4 col-md-12">
                <div class="post">
                    <div class="category-post">
                        <a href="#" target="_blank"><span>food</span></a>
                    </div>
                    <div class="img-post">
                        <a href="blog-post.html" target="_blank"><img src="https://via.placeholder.com/2500x1600" class="img-fluid" alt="img-post" /></a>
                    </div>
                    <div class="infos-post">
                        <h3><a href="blog-post.html" target="_blank">Sed ut perspiciatis unde omnis</a></h3>
                        <span>- 30 sept 2017 -</span>
                        <hr>
                        <p>Natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab...</p>
                    </div>
                    <div class="tags-post">
                        <i class="manisa-tag"></i>
                        <span>
                                <a href="#" target="_blank">foods</a>,
                                <a href="#" target="_blank">blog</a>,
                                <a href="#" target="_blank">post</a>
                                </span>

                    </div>
                    <div class="comments-post d-none d-sm-block">
                        <a href="#" target="_blank">
                            <span>220</span><i class="manisa-bubble"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Blog Number 1 -->
            <!-- ===================== -->
            <!-- Start Blog Number 2 -->
            <div class="col-lg-4 col-md-12">
                <div class="post">
                    <div class="category-post">
                        <a href="#" target="_blank"><span>draw</span></a>
                    </div>
                    <div class="img-post">
                        <a href="blog-post.html" target="_blank"><img src="https://via.placeholder.com/2500x1600" class="img-fluid" alt="img-post" /></a>
                    </div>
                    <div class="infos-post">
                        <h3><a href="blog-post.html" target="_blank">At vero eos et accus amus iusto</a></h3>
                        <span>- 17 oct 2017 -</span>
                        <hr>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur magni dol...</p>
                    </div>
                    <div class="tags-post">
                        <i class="manisa-tag"></i>
                        <span>
                                <a href="#" target="_blank">blog</a>,
                                <a href="#" target="_blank">post</a>
                                </span>

                    </div>
                    <div class="comments-post d-none d-sm-block">
                        <a href="#" target="_blank">
                            <span>199</span><i class="manisa-bubble"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Blog Number 2 -->
            <!-- ===================== -->
            <!-- Start Blog Number 3 -->
            <div class="col-lg-4 col-md-12">
                <div class="post">
                    <div class="category-post">
                        <a href="#" target="_blank"><span>lifestyle</span></a>
                    </div>
                    <div class="img-post">
                        <a href="blog-post.html" target="_blank"><img src="https://via.placeholder.com/2500x1600" class="img-fluid" alt="img-post" /></a>
                    </div>
                    <div class="infos-post">
                        <h3><a href="blog-post.html" target="_blank">Neque porro quisquam dolorem</a></h3>
                        <span>- 25 oct 2017 -</span>
                        <hr>
                        <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam ut aliquid...</p>
                    </div>
                    <div class="tags-post">
                        <i class="manisa-tag"></i>
                        <span>
                                <a href="#" target="_blank">lifestyle</a>,
                                <a href="#" target="_blank">blog</a>,
                                <a href="#" target="_blank">post</a>
                                </span>

                    </div>
                    <div class="comments-post d-none d-sm-block">
                        <a href="#" target="_blank">
                            <span>521</span><i class="manisa-bubble"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Blog Number 3 -->
        </div>
        <a href="blog.html" target="_blank" class="btn-manisa">See More</a>
    </div>
</section>

<!-- End Blog -->


<!-- Start Contact -->
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
                    <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d162778.81964475298!2d-73.93891815355539!3d40.703660465248056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY!5e0!3m2!1sen!2s!4v1491335061565"></iframe>
                </div>
                <div class="container">
                    <div class="contact-form">
                        <form id="my_form" method="post" onsubmit="submitForm(); return false;">
                            <div class="form-group">
                                <input id="name" class="form-control" type="text" name="name" placeholder="Your Name" required/>
                            </div>
                            <div class="form-group">
                                <input id="email" class="form-control" type="email" name="email" placeholder="E-mail" required/>
                            </div>
                            <div class="form-group">
                                <input id="phone" class="form-control" type="phone" name="phone" placeholder="Your Phone"/>
                            </div>
                            <div class="message">
                                <div class="form-group">
                                    <textarea id="msg" class="form-control" placeholder="Write Your message here ..." required></textarea>
                                </div>
                                <p><input id="btn" class="btn" type="submit" value="Send Message" /><span id="status"></span></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End Contact -->


<!-- Start Footer -->

<footer class="text-center">
    <div class="footer-content">
        <div class="social-media-footer">
            <a href="https://www.facebook.com/" target="_blank"><i class="manisa-facebook"></i></a> <!-- You Can Edit the link here -->
            <a href="https://www.twitter.com/" target="_blank"><i class="manisa-twitter"></i></a> <!-- You Can Edit the link here -->
            <a href="https://www.tumblr.com/" target="_blank"><i class="manisa-tumblr"></i></a> <!-- You Can Edit the link here -->
            <a href="https://www.youtube.com/" target="_blank"><i class="manisa-youtube"></i></a> <!-- You Can Edit the link here -->
            <a href="https://www.dribbble.com/" target="_blank"><i class="manisa-dribbble"></i></a> <!-- You Can Edit the link here -->
        </div>
        <a href="#">
            <span class="bg_logo"></span>
            <!-- You Can Edit the image on main.css file just search ( bg_logo ) -->
        </a>
        <div class="copyright">
            <p>© Copyright 2017. </p>
            <p>All Right Reserved By <span>Bouthaina</span></p>
        </div>
    </div>
</footer>

<!-- End Footer -->

<!-- Start SrollTop -->

<div class="scrolltop">
    <i class="fa fa-angle-double-up"></i>
</div>

<!-- End SrollTop -->

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-1.12.4.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/popper.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/lightbox.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/typed.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/slick.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/waypoints.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.counterup.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom.js"></script>
</body>
</html>