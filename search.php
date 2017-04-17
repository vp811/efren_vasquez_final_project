<?php
/* Template Name: Search Page */
get_header(); ?>

<div class="row">
	<div class="twelve columns">
		<?php if( have_posts() ) :?>
            <div id="search-header">
                <h2><?php printf(
    					__('Search Results for: %s'),
    					'<span>' . get_search_query() . '</span>' );
    				?></h2>
                    <?php
        			while (have_posts()) : the_post(); ?>
                    <hr />
                        <h3><?php the_title(); ?></h3>
        				<?php the_content();
        			endwhile;
        		 else : ?>
        			<h1>Nothing Found</h1>
        			<p>Sorry, but nothing matched your search criteria. Please try again with different search terms.</p>
        		<?php endif; ?>
            </div>
    	</div>
</div>
</div>
<?php get_footer(); ?>
