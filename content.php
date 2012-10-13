<?php
/**
 * The template for displaying archive, search, and list view content.
 *
 * @package Groundwork
 * @since Groundwork 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
	
		<?php if ( is_archive() ) { ?>
		
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Link to %s', 'groundwork' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		
		<? } else { ?>
		
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Link to %s', 'groundwork' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		
		<? } ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		
			<div class="entry-meta">
				<?php groundwork_posted_on(); ?>
			</div><!-- .entry-meta -->
			
		<?php endif; ?>
		
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display excerpts for Search ?>
	
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
	
	<?php else : ?>
	
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'groundwork' ) ); ?>
		</div><!-- .entry-content -->
	
	<?php endif; ?>

	<footer class="entry-meta">
	
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
		
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'groundwork' ) );
				if ( $categories_list && groundwork_categorized_blog() ) :
			?>
			
				<span class="cat-links">
					<?php printf( __( 'Posted in %1$s', 'groundwork' ), $categories_list ); ?>
				</span>
			
			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'groundwork' ) );
				if ( $tags_list ) :
			?>
			
				<span class="sep"> | </span>
				<span class="tag-links">
					<?php printf( __( 'Tagged %1$s', 'groundwork' ), $tags_list ); ?>
				</span>
			
			<?php endif; // End if $tags_list ?>
			
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		
			<span class="sep"> &bull; </span>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'groundwork' ), __( '1 comment', 'groundwork' ), __( '% comments', 'groundwork' ) ); ?></span>
			
		<?php endif; ?>

			<?php edit_post_link( __( 'Edit', 'groundwork' ), '<span class="sep"> &bull; </span><span class="edit-link">', '</span>' ); ?>
		
	</footer><!-- .entry-meta -->
	
</article><!-- #post-<?php the_ID(); ?> -->
