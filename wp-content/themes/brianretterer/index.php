<?php get_header(); ?>

    <section class="header-blog active-nav" style="background-image: url(<?php echo get_theme_mod( 'homepage_header_background_image' ); ?>);">
        <div class="overlay">
            <h1><?php bloginfo( 'name' ); ?></h1>
        </div>
    </section>

<?php
if(have_posts()) :
    ?>
    <section id="blog" class="blog blog-page text-center active-nav">
        <div class="container">
            <div class="title">
                <h2 class="text-uppercase">Blog</h2>
            </div>
            <div class="row">
                <?php
                while ( have_posts() ) : the_post();
                    ?>
                    <div class="col-lg-6 col-md-12">
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
    the_posts_pagination( [
        'prev_text' => __( 'Previous', 'brianretterer' ),
        'next_text' => __( 'Next', 'brianretterer' ),
    ] );

endif;
?>

<?php get_footer(); ?>