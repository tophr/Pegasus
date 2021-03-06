<?php
/**
 * The main template file.
 *
 */

get_header(); ?>

<div class="row">
	<?php get_sidebar(); ?>
	<div class="span9">
		<?php if ( have_posts() ) : ?>
		<?php //pegasus_content_nav( 'nav-above' ); ?>
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>
		<?php //pegasus_content_nav( 'nav-below' ); ?>
		<?php else : ?>
		<article id="post-0" class="post no-results not-found">
			<header class="entry-header">
				<h1 class="entry-title">
					<?php _e( 'Nothing Found', 'pegasus' ); ?>
				</h1>
			</header>
			<!-- .entry-header -->
			
			<div class="entry-content">
				<p>
					<?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'pegasus' ); ?>
				</p>
				<?php get_search_form(); ?>
			</div>
			<!-- .entry-content --> 
		</article>
		<!-- #post-0 -->
		
		<?php endif; ?>
	</div>
	<!-- #content --> 
</div>
<!-- #primary -->
<?php get_footer(); ?>
