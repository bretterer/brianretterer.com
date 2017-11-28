<?php get_header(); ?>

<?php
/* Start the Loop */
while ( have_posts() ) : the_post();
?>
<!-- Start Header -->
<?php
    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
        $featuredImage = get_the_post_thumbnail_url();
    }
?>
<section class="header-blog-post text-center" style="background-image: url(<?php echo $featuredImage; ?>);">
    <div class="overlay">
        <div class="title">
            <h1><?php the_title(); ?></h1>
            <span><?php the_date(); ?> - By <?php echo get_the_author_meta('display_name'); ?></span>
            <p class="type"></p>
        </div>
    </div>
</section>

<!-- End Header -->

<!-- Start The Content -->
<section class="content-post">
    <div class="container">
        <div class="mycontent">
            <?php the_content(); ?>
        </div>
        <hr>
        <div class="author-post">
            <div class="row">
                <div class="col-md-3 col-12">
                    <div class="author-img">
                        <?php echo get_avatar( get_the_author_meta('ID'), 160 ); ?>
                    </div>
                </div>
                <div class="col-md-9 col-12">
                    <div class="author-info">
                        <h3><?php echo get_the_author_meta('display_name'); ?></h3>
                        <p><?php echo get_the_author_meta('description'); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <hr>

            <?php
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
            ?>
    </div>
</section>

<!-- End The Content -->
<?php
endwhile;
?>
<?php get_footer(); ?>
