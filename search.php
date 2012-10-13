<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Groundwork
 * @since Groundwork 1.0
 */

get_header(); ?>

<div id="primary">

	<div id="content" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
			
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'groundwork' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header>

			<?php groundwork_content_nav( 'nav-above' ); ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'search' ); ?>

			<?php endwhile; ?>

			<?php groundwork_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'search' ); ?>

		<?php endif; ?>

	</div><!-- #content -->
	
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>