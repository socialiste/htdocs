

<?php
get_header(); ?>

	<section>
            <div class="section">
                <div id="content" class="site-content" role="main">
                <div> 
                    <div class="categorie">ÉCONOMIE</div>
		<?php 
                add_filter( 'excerpt_length', 'main_exercpt_length', 1);
                if ( have_posts() ) : 
                    query_posts('category_name=travail');?>
			<?php /* The loop */ ?>
			<?php 
                        $i= 0;
                        while ( have_posts() && $i <= 3) : the_post(); $i++; 
                            if ($i==1) {?>
                            <div class="articles"><h2>
                                    <a href="<?php echo get_permalink(); ?>"><?php the_title();?></h2></a>  <span class="author"><?php the_author_link();?> </span>
                                <span class="date"><?php  the_date( 'l, F j', '/', '', TRUE); ?></span>
                                <?php the_excerpt(); ?>
                            </div>
                            <?php
                            }
                            if ($i!=1){
                            add_filter( 'excerpt_length', 'second_exercpt_length', 2);?>
                                <div class="sub-articles">
                                    <a href="<?php echo get_permalink(); ?>"><h3><?php the_title();?></h3></a> <span class="author"> <?php the_author_link();?> </span>
                                    <span class="date"><?php  the_date( 'l, F j', '/', '', TRUE); ?></span>
                                    <?php the_excerpt(); ?>
                                </div>
                                <?php
                            } 
                            endwhile; ?>
		<?php endif; ?>

        
		</div>
                <div> 
                    <div class="categorie">CULTURE</div>
		<?php   
                //remove_filter( 'excerpt_length', 'second_exercpt_length');
                add_filter( 'excerpt_length', 'main_exercpt_length', 3 ); 
                if ( have_posts() ) : 
                    query_posts('category_name=culture');?>
			<?php /* The loop */ ?>
			<?php 
                        $i= 0;
                        while ( have_posts() && $i <= 3 ) : the_post(); $i++; 
                            if ($i==1) {
                                ?>
                            <div>
                                <a href="<?php echo get_permalink(); ?>"><h2><?php the_title();?></h2></a>  <span class="author"><?php the_author_link();?> </span>
                                                                <span class="date"><?php  the_date( 'l, F j', '/', '', TRUE); ?></span>
                                <?php the_excerpt(); ?>
                            </div>
                            <?php
                            }
                            if ($i!=1){
                            add_filter( 'excerpt_length', 'second_exercpt_length', 4 );?>
                                <div class="sub-articles">
                                    <a href="<?php echo get_permalink(); ?>"><h3><?php the_title();?></h3></a> <span class="author"> <?php the_author_link();?> </span>
                                    <span class="date"><?php  the_date( 'l, F j', '/', '', TRUE); ?></span>
                                    <?php the_excerpt(); ?>
                                </div>
                                <?php
                            } 
                            endwhile; ?>
		<?php endif; ?>

        
		</div>
<div> 
                    <div class="categorie">MILIEUX DE VIE</div>
		<?php 
                add_filter( 'excerpt_length', 'main_exercpt_length', 5);
                if ( have_posts() ) : 
                    query_posts('category_name=milieux-de-vie');?>
			<?php /* The loop */ ?>
			<?php 
                        $i= 0;
                        while ( have_posts() && $i <= 3 ) : the_post(); $i++; 
                            if ($i==1) {?>
                            <div>
                                <a href="<?php echo get_permalink(); ?>"><h2><?php the_title();?></h2></a>  <span class="author"><?php the_author_link();?> </span>
                                <span class="date"><?php  the_date( 'l, F j', '/', '', TRUE); ?></span>
                                <?php the_excerpt(); ?>
                            </div>
                            <?php
                            }
                            if ($i!=1){
                            add_filter( 'excerpt_length', 'second_exercpt_length', 6 );?>
                                <div class="sub-articles">
                                    <a href="<?php echo get_permalink(); ?>"><h3><?php the_title();?></h3></a> <span class="author"> <?php the_author_link();?> </span>
                                    <span class="date"><?php  the_date( 'l, F j', '/', '', TRUE); ?></span>
                                    <?php the_excerpt(); ?>
                                </div>
                                <?php
                            } 
                            endwhile; ?>
		<?php endif; ?>

        
		</div>
                </div><!-- #content -->
                <div id="content-mid"> 
                    <div class="categorie"> OPINION </div>
                                   
                        <?php 
                        add_filter( 'excerpt_length', 'opinion_excerpt_length', 7 );
                        query_posts('category_name=opinion');?> 
                            <?php /* The loop */ ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                        <h3 id="content-mid-title">
                            <a href="<?php echo get_permalink(); ?>"><?php the_title();?></a> <span class="opinion-author"> <?php the_author_link();?> </span>
                        </h3>
                          
                        <div id="avatar">
                            <?php if(userphoto_exists(get_the_author_meta( 'ID' ))){
                                    userphoto_the_author_photo();
                                  }else{
                                    echo get_avatar( get_the_author_meta( 'ID' ), 100 );
                                  }?>
                        </div>
                        
                        <div class="excerpt">
                        <?php the_excerpt();?>
                        </div>

			<?php endwhile; ?>
            </div>
        </div>
	</section><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
