<?php get_header(); ?>

<!-- Begin Section Container -->
    <section class="row">
        <div class="eight columns">

        <!-- BEGIN LOOP -->
        			<?php
        			if ( have_posts() ) {
        			    while ( have_posts() ) {
        			        the_post(); ?>

                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>

                        <?php
        			    } // end while
        			} // end if
        			?>
        <!-- END LOOP -->

        </div>
        <div class="four columns">
            <?php get_sidebar(); ?>
        </div>
    </section>
<!-- End Section -->

<?php get_footer(); ?>