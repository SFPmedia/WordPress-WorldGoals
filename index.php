<?php get_header();?>

<main class="grid">
        <section class="content-grid colors frontpage">
        <?php 
	
	if( have_posts() ):
		
                while( have_posts() ): the_post(); ?>

                        <p><?php the_content(); ?></p>
                        <div class="scroll"></div>

                <?php endwhile;
		
	endif;
			
	?>
        </section>
</main>

<?php get_footer();?>