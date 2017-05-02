<?php
/**
 * The main template file.
 *
 */

get_header(); ?>
	
	<?php if ( ! is_front_page() ) : ?>

		<header class="page-header clr">
			<?php if ( is_home() ) : ?>
				<h1><?php echo apply_filters( 'the_title', get_page( get_option( 'page_for_posts' ) )->post_title ); ?></h1>
			<?php elseif ( is_category() ) : ?>
				<h1><?php single_term_title(); ?></h1>
			<?php else : ?>
				<h1><?php the_archive_title(); ?></h1>
			<?php endif; ?>
		</header><!--.page-header clr -->
		
	<?php endif; ?>

	<div id="primary" class="content-area span_16 col clr clr-margin">

		<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endwhile; ?>

				<?php wpex_pagination(); ?>

			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>

		</div><!-- #content -->

	</div><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>