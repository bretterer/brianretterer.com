<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div class="comments-post">
    <span class="text-center num-comments">
        <?php
        $count = get_comment_count(get_the_ID())['approved'];
        printf( _n( '%s Comment', '%s Comments', $count, 'brianretterer' ), number_format_i18n( $count ) );
        ?>
    </span>

    <?php if ( have_comments() ) : ?>
    <ul class="comments list-unstyled">
        <?php
        wp_list_comments( [
            'avatar_size' => 70,
            'style'       => 'ul',
            'walker'      => new BrianRetterer_Walker_Comment
        ] );
        ?>
    </ul>

        <?php the_comments_pagination( array(
            'prev_text' => __( 'Previous', 'brianretterer' ),
            'next_text' => __( 'Next', 'brianretterer' ),
        ) );
        if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

            <p class="no-comments"><?php _e( 'Comments are closed.', 'brianretterer' ); ?></p>

        <?php
        endif;

    endif;
        comment_form([
            'title_reply_before' => '<h4>',
            'title_reply_after' => '</h4>',
            'title_reply' => __( 'Leave a Comment' ),
            'title_reply_to' => __( 'Reply To %s' ),
            'comment_field' => '<div class="form-group"><textarea id="comment" name="comment" cols="30" rows="4" class="form-control" placeholder="Comment *" required></textarea></div>',
            'submit_button' => '<button class="btn g-recaptcha" data-badge="inline" data-sitekey="6LehAjsUAAAAAEtbES5DkfLTSmN7EXNbd5NgN30d" data-callback="commentFormOnSubmit">Post comment</button>',
            'fields' => [
                'author' => '<div class="form-group"><input type="text" class="form-control" placeholder="Name *" name="author" required></div>',
                'email' => '<div class="form-group"><input type="email" class="form-control" placeholder="E-mail *" name="email" required></div>',
                'url' => '<div class="form-group"><input type="text" class="form-control" placeholder="URL" name="url"></div>'
            ],
            'submit_field'         => '%1$s %2$s'

        ]);
    ?>
</div>

<script>
    function commentFormOnSubmit(token) {
        document.getElementById("commentform").submit();
    }
</script>