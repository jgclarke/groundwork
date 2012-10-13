<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Groundwork
 * @since Groundwork 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
	
		<h1 class="entry-title"><?php the_title(); ?></h1>
		
	</header><!-- .entry-header -->

	<div class="entry-content">
	
		<?php the_content(); ?>
		
		<?php edit_post_link( __( 'Edit', 'groundwork' ), '<span class="edit-link">', '</span>' ); ?>
		
	</div><!-- .entry-content -->
	
</article><!-- #post-<?php the_ID(); ?> -->
