<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <!-- meta Data -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light">

        <div class="container">
            <a href="#">
                <span class="bg_logo"><?php bloginfo('title'); ?></span>
                <!-- You Can Edit the image on main.css file just search ( bg_logo ) -->
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="menu">
                    <span class="line1"></span>
                    <span class="line2"></span>
                    <span class="line3"></span>
                </div>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#header" data-value="header" class="active-nav">
                            <i class="manisa-home" hidden></i>
                            <span class="name-menu">Home</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="nav-toggle">
        <div class="menu">
            <span class="line1"></span>
            <span class="line2"></span>
            <span class="line3"></span>
        </div>
    </div>

    <section id="header" class="header" style="background-image: url(https://brianretterer.dev/wp-content/themes/brianretterer/img/header-background.jpg);">
        <div class="overlay"></div>
        <div class="title">
<!--            <h1>Hi! I'm <span class="pattaya">Brian</span></h1>-->
        </div>
    </section>

    <section id="about" class="about">
        <div class="container">
            <div class="title text-center">
                <h2 class="text-uppercase">About Me</h2>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg text-center">
                    <div class="about-img"></div>
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
                                <img src="http://via.placeholder.com/200x50" class="img-fluid signature" alt="signature"/>
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
<?php wp_footer(); ?>
</body>
</html>