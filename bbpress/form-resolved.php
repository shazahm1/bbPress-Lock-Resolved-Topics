<?php

/**
 * New/Edit Reply
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<?php if ( bbp_is_reply_edit() ) : ?>

<div id="bbpress-forums">

	<?php bbp_breadcrumb(); ?>

<?php endif; ?>
	<div id="no-reply-<?php bbp_topic_id(); ?>" class="bbp-no-reply">
		<div class="bbp-template-notice">
			<?php $permalink = bbp_get_forum_permalink( bbp_get_topic_forum_id( bbp_get_topic_id() ) ) . '#new-post'; ?>
			<p><?php printf( __( 'You cannot reply to this support topic. <a href="%s">Please open your own support topic.</a>', 'bbpress' ), $permalink ); ?></p>
		</div>
	</div>

<?php if ( bbp_is_reply_edit() ) : ?>

</div>

<?php endif;

// todo: create new topic form populated with ticket link and short desc and then redirect on submisssion

?>
