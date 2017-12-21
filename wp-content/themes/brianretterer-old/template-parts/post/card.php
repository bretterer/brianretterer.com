<div class="post">
    <div class="category-post">
        <?php the_category(', '); ?>
    </div>
    <div class="img-post">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']); ?>
        </a>
    </div>
    <div class="infos-post">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <span>- <?php the_modified_date(); ?> -</span>
        <hr>
        <?php the_excerpt(); ?>
    </div>
    <?php if( has_tag() ) : ?>
        <div class="tags-post">
            <?php the_tags('<i class="manisa-tag"></i>', ', '); ?>
        </div>
    <?php endif; ?>
    <div class="comments-post d-none d-sm-block">
        <a href="<?php echo get_comments_link(); ?>">
            <span>
                <?php echo get_comment_count(get_the_ID())['approved']; ?>
            </span><i class="manisa-bubble"></i>
        </a>
    </div>
</div>