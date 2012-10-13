<?php
/**
 * The template for displaying search forms in Groundwork.
 *
 * @package Groundwork
 * @since Groundwork 1.0
 */
?>

<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">

	<label for="s" class="assistive-text"><?php _e( 'Search', 'groundwork' ); ?></label>
	
	<input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;', 'groundwork' ); ?>" />
	
	<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'groundwork' ); ?>" />
	
</form>
