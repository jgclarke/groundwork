<?php
/**
 * The template for displaying 404 pages.
 *
 * @package Groundwork
 * @since Groundwork 1.0
 */

get_header(); ?>

	<div id="primary">
	
		<div id="content" role="main">

			<article id="post-0" class="post error404 not-found">
			
				<header class="entry-header">
					<h1 class="page-title"><?php _e( 'Page Not Found', 'groundwork' ); ?></h1>
				</header>

				<div class="entry-content">
				
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'groundwork' ); ?></p>

					<?php get_search_form(); ?>

				</div><!-- .entry-content -->
				
			</article><!-- #post-0 -->

		</div><!-- #content -->
		
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>