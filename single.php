<?php get_header(); ?>

<!-- Begin Section Container -->
    <section class="row">
        <div class="twelve columns">
        <!-- BEGIN LOOP -->
        			<?php
        			if ( have_posts() ) {
        			    while ( have_posts() ) {
        			        the_post();
                            if ( has_post_thumbnail() ) { ?>
    				            <?php } ?>
                                <div id="single">
                                    <h2><?php the_title(); ?></h2>
                                    <?php the_content(); ?>
                                </div>

                        <?php
        			    } // end while
        			} // end if
        			?>
        <!-- END LOOP -->
        </div>
    </section>

    <section class="row">
        <div class="six columns" id="nav-post1">
            <div><p><?php previous_post_link(); ?></p></div>
        </div>

        <div class="six columns" id="nav-post2">
            <div><p><?php next_post_link(); ?></p></div>
        </div>
    </section>

<!-- End Section -->
</div>
<?php get_footer(); ?>
