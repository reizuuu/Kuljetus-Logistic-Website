<?php
/**
 * Fallback template, required for WordPress to recognize this as a valid
 * theme. front-page.php handles the homepage; this covers anything else
 * (e.g. a default blog page).
 */

get_header();
?>

<div class="container section">
	<?php if ( have_posts() ) : ?>
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<article <?php post_class(); ?>>
				<h1><?php the_title(); ?></h1>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>
			<?php
		endwhile;
		?>
	<?php else : ?>
		<p><?php esc_html_e( 'Nothing found.', 'kuljetus' ); ?></p>
	<?php endif; ?>
</div>

<?php
get_footer();
