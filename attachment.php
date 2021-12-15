<?php
/**
 * Page Template: Media Attachment
 *
 * @link       https://github.com/zachwatkins/tamus-order/blob/master/attachment.php
 * @since      1.0.0
 * @package    tamus-order
 */

// Redirect attempts to view the attachment page back to the post page.
wp_safe_redirect( get_permalink( $post->post_parent ) );
