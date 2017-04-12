<?php
/*
Template Name: Posts
*/
?>
<?php get_header(); ?>

<!-- Begin Section Container -->
    <section class="row">
        <div class="twelve columns">

        <!-- BEGIN LOOP -->
            <?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>
                <div class="row">
                    <div class="twelve columns" >
                            <?php if (have_posts()) :
                                while (have_posts()) : the_post(); ?>
                                <div id="post-thumbnails">
                                    <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2>
                                        <?php the_post_thumbnail('thumbnail');  ?></a>
                                </div>
                                    <?php
                                endwhile;
                            endif; ?>
                        </div>
                    </div>
                </div>
        <!-- END LOOP -->




<a href="<?php the_permalink(); ?>">
        </div>
    </section>
<!-- End Section -->
</div>
<?php get_footer(); ?>
