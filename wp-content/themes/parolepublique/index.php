
<div id ="wrap">
<?php
get_header(); ?>


	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<?php if ( have_posts() ) : 
                    query_posts('cat=1');?>
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
                        <h3><?php the_title();?></h3>
                        <?php the_content();?>
			<?php endwhile; ?>

		

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

        
		</div><!-- #content -->
                <div id="content" class="site-content" role="main">
		<?php if ( have_posts() ) : 
                    query_posts('cat=2');?>
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
                        <h3><?php the_title();?></h3>
                        <?php the_content();?>
			<?php endwhile; ?>

		

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

        
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
</div>
