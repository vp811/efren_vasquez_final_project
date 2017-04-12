<?php get_header(); ?>

<!-- Begin Section Container -->
</div>
    <section class="row">
        <div class="twelve columns">
            <div id="banner-img">
                <?php the_post_thumbnail('full'); ?>
            </div>
        </div>
    </section>

<div class="container">
    <section class="row">
        <div class="twelve columns">

        <!-- BEGIN LOOP -->
        			<?php
        			if ( have_posts() ) {
        			    while ( have_posts() ) {
        			        the_post(); ?>
                            <div id="post">
                                <h3 id="about"><?php the_title(); ?></h3>
                                <?php the_content(); ?>
                            </div>
                        <?php
        			    } // end while
        			} // end if
        			?>
        <!-- END LOOP -->

        </div>
    </section>
    </div>
<!-- End Section -->

<?php get_footer(); ?>
