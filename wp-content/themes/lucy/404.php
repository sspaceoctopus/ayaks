<?php
/**
 * The template for displaying page NOT FOUND.
 *
 * @package Lucy
 */
get_header(); ?>
	 <div class="heading-name bg-source" >
		<div class="wrap-grid">
			<h3><?php _e( 'Не найдено.', 'lucy' ); ?></h3>
		</div>
	</div>
	<div class="blog-container wrap-grid">
		<section class="blog-content">
			<div class="the-blog-item post">
				<div class="the-blog-item-text"><?php _e( 'Извините, но по Вашему запросу ничего не было найдено.', 'lucy' ); ?></div>
			</div>
		</section>
	</div>
<?php get_footer(); ?>