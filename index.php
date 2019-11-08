<?php get_header();?>

<main class="grid">
        <section class="content-grid colors frontpage">
        
        <?php 
	
	if( have_posts() ):
		
                while( have_posts() ): the_post(); ?>

                        <h3><?php the_title()?></h3>
                        
                        <p><?php the_content(); ?></p>

                <?php endwhile;
		
	endif;
			
        ?>
        </section>
</main>

<?php get_footer();?>