<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package danfe
 */
get_header();
global $danfe_theme_options;

$designlayout = $danfe_theme_options['danfe-layout'];

$side_col = 'right-s-bar ';

if( 'left-sidebar' == $designlayout ){
	
	$side_col = 'left-s-bar';
}
?>
	<div id="primary" class="content-area col-sm-8 col-md-8 <?php echo esc_attr( $side_col );?>">
		<main id="main" class="site-main" role="main">
		<?php

		if ( have_posts() ) : ?>

			<div class="archive-heading-wrapper">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</div><!-- .page-header -->
			<?php

			/* Start the Loop */
			while ( have_posts() ) : the_post();
				/*

				 * Include the Post-Format-specific template for the content.

				 * If you want to override this in a child theme, then include a file

				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.

				 */
				get_template_part( 'template-parts/content', get_post_format() );
			endwhile;

			do_action('danfe_action_navigation');

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_sidebar();
get_footer();

