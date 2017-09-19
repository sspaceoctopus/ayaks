<?php
/**
 * The template for displaying archive
 *
 *
 * @package Lucy
 */
get_header(); ?>
	<div class="heading-name bg-source" >
		<div class="wrap-grid">
			<h3><?php
					if ( is_day() ) :
						printf( __( 'Архивы за день: %s', 'lucy' ), '<span>' . get_the_date() . '</span>' );
					elseif ( is_month() ) :
						printf( __( 'Архивы за месяц: %s', 'lucy' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'lucy' ) ) . '</span>' );
					elseif ( is_year() ) :
						printf( __( 'Архивы за год: %s', 'lucy' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'lucy' ) ) . '</span>' );
					else :
						_e( 'Архивы', 'lucy' );
					endif;
				?>
			</h3>
		</div>
	</div>
	<?php get_template_part( 'content', 'posts' ); ?>									
<?php get_footer(); ?>