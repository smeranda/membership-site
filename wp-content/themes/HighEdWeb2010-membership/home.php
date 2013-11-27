<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */
get_header();

?>
<section id="content" class="<?php echo is_active_sidebar( 'secondary-widget-area' ) ? "grid_6" : "grid_8 suffix_1" ?>">
                	<div class="grid_inner">

<?php
$page_id = 57;
$page_data = get_page( $page_id );
$content = apply_filters('the_content', $page_data->post_content);
$title = $page_data->post_title;
echo $content;
?>


					</div>
                </section><!-- #content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>


