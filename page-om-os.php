<?php get_header();?>

<main class="grid">
        <section class="content-grid colors om-os">
        <?php 
	
	if( have_posts() ):
		
                while( have_posts() ): the_post(); ?>

                        <p><?php the_content(); ?></p>

                <?php endwhile;
		
	endif;
			
        ?>
        </section>
</main>

<?php get_footer();?>