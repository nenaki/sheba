<?php get_header(); ?>

<section>
	<div class="wrapper">
	
	 <!-- Start the Loop. -->
		<?php if ( have_posts() ) : ?>
		
			<header class="page-header">
				<h1 class="page-title">
				<?php
				if ( is_day() ) :
					printf( __( 'Daily Archives: %s', 'wptricks' ), get_the_date() );
				
				elseif ( is_month() ) :
					printf( __( 'Monthly Archives: %s', 'wptricks' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'wptricks' ) ) );
				
				elseif ( is_year() ) :
					printf( __( 'Yearly Archives: %s', 'wptricks' ), get_the_date( _x( 'Y', 'yearly archives date format', 'wptricks' ) ) );
				
				else :
					_e( 'Archives', 'wptricks' );
				
				endif;
				?>
				</h1>
			</header><!-- .page-header -->
		
		<?php while ( have_posts() ) : the_post(); ?>
		
		<div class="post">
			<header>
				<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>	
				<small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
			</header>
			<div class="entry">
				<?php the_content(); ?>
			</div>
			<p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
		</div> <!-- /.post -->
		
		<?php endwhile; ?>
		
		<?php post_pagination(); /* Post pagination */ ?>
		
		<?php else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>		
		<?php endif; ?>
		
		<?php get_sidebar(); ?>

		
	</div> <!-- /.wrapper -->
</section>

<?php get_footer(); ?>
