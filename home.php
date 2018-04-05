<?php
/**
 * Template Name: Home Page
 *
 * A custom page template.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Theme
 * @since 0.1.0
*/
?>

<?php get_header(); ?>
<?php WPBaseTheme___get_page( "home" ); ?>
<?php get_footer(); ?>