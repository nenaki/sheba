<?php get_header(); ?>

<section>
	<div class="wrapper">
	 <!-- Start the Loop. -->
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<div class="post">
			<header>
				<h1><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>	
			</header>
			<div class="entry">
				<?php the_content(); ?>
			</div><!-- /.entry -->
		</div> <!-- /.post -->
		
		<?php endwhile; else : ?>	
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<!-- REALLY stop The Loop. -->
		
		<?php endif; ?>
	</div> <!-- /.wrapper -->
</section>

<?php get_footer(); ?>