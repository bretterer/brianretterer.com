<?php get_header(); ?>
    <section id="header" class="header" style="background-image: url(<?php echo get_theme_mod( 'homepage_header_background_image' ); ?>);">
        <div class="overlay"></div>
        <div class="title">
            <h1>Brian Retterer</h1>
            <p class="type">PHP Developer</p>
        </div>
    </section>


    <!-- Start Blog -->
<?php
$recentPosts = new WP_Query( [
    'posts_per_page' => 3
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

    <section id="about" class="about">
        <div class="container">
            <div class="title text-center">
                <h2 class="text-uppercase">About Me</h2>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg text-center">
                    <div class="about-img" style="background-image: url(https://brianretterer.dev/wp-content/uploads/2017/11/brian-working.png);"></div>
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
                                <p>Brian Retterer is a developer advocate at Okta, a Silicon Valley cloud-based identity service. He is focused on serving the PHP community, and always excited to represent and educate developers, especially in the Midwest. From his home base in Ohio, you can often find him advocating for best practices in account security and RESTful API design. With his 13+ years of experience in working with PHP, he has experienced the growing pains and exciting changes that PHP has gone through. You can follow Brian on Twitter at @bretterer</p>
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


<?php get_footer(); ?>