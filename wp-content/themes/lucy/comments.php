<?php
/**
 * The template for displaying Comments.
 *
 *
 * @package Lucy
 */
$oddcomment = 'class="alt" ';
?>
<?php if ( ! post_password_required() ) { ?>
<div class="comments comment-form-container">
	<?php if ( ! comments_open() & is_single() )  : ?><p><?php _e( 'Комментарии закрыты.', 'lucy' ); ?></p><?php endif; ?>
	<?php if ($comments) : ?>
		<h3><?php printf( _n( '1 комментарий к записи &ldquo;%2$s&rdquo;', '%1$s комментариев к записи &ldquo;%2$s&rdquo;', get_comments_number(), 'lucy' ), number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );?></h3>
		<ul class="commentlist">
		    <?php wp_list_comments(); ?>
		</ul>
	<?php endif; ?>
	<p><?php paginate_comments_links(); ?></p>
	<?php comment_form(); ?>
</div>
<?php } ?>