<?php
/** COMMENTS WALKER */
class BrianRetterer_Walker_Comment extends Walker_Comment {

    // init classwide variables
    var $tree_type = 'comment';
    var $db_fields = array( 'parent' => 'comment_parent', 'id' => 'comment_ID' );

    public function start_lvl( &$output, $depth = 0, $args = array() ) {
        ?>
        <ul class="comments list-unstyled">
        <?php
    }
    public function end_lvl( &$output, $depth = 0, $args = array() ) {
        ?>
        </ul>
        <?php
    }

    /** START_EL */
    function start_el( &$output, $comment, $depth = 0, $args = [], $id = 0 ) {
    $depth++;
    $GLOBALS['comment_depth'] = $depth;
    $GLOBALS['comment'] = $comment;
    $parent_class = ( empty( $args['has_children'] ) ? '' : 'parent' ); ?>

    <li <?php comment_class( $parent_class ); ?> id="comment-<?php comment_ID() ?>">

    <div class="avatar">
        <?php echo ( $args['avatar_size'] != 0 ? get_avatar( $comment->comment_author_email, $args['avatar_size'],
            null, 'avatar', ['class' => 'img-fluid'] ) :'' ); ?>
    </div>

    <div class="content">
        <span class="name"><?php echo $comment->comment_author; ?> </span>
        <span class="date"><?php comment_date(); ?> at <?php comment_time(); ?></span>
        <?php if( current_user_can('edit_comment')) : ?>
        <span class="edit"><?php edit_comment_link( 'Edit Comment' ); ?></span>
        <?php endif; ?>
        <?php $reply_args = [
            'depth' => $depth,
            'max_depth' => $args['max_depth']
        ];

        comment_reply_link( array_merge( $args, $reply_args ) );  ?>



        <?php if( !$comment->comment_approved ) : ?>
            <em class="comment-awaiting-moderation">Your comment is awaiting moderation.</em>

        <?php else: comment_text(); ?>
        <?php endif; ?>
    </div>

<?php }

function end_el(&$output, $comment, $depth = 0, $args = array() ) { ?>

    </li>

<?php }

}