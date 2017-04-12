<?php get_header(); ?>

<!-- Begin Section Container -->

    <section class="row">
                <div class="six columns">
                    <div id="intro">
                        <?php dynamic_sidebar('first-widget'); ?>
                    </div>
                </div>

                <div class="six columns">
                        <img id="player" src="player.png" alt="player" />
                </div>
    </section>

</div>
    <section class="row">
        <div class="twelve columns">
            <div class="border">
            </div>
        </div>
    </section>


<div class="container">
    <section class="row" id="pages">
            <div class="four columns">
                <div class="links">
                    <a href="<?php echo get_page_link( get_page_by_title( AfterSchoolPrograms )->ID ); ?>"><img src="player1.png" alt="lessons"></a>
                    <div class="overlay">
                        <p>After School Programs</p>
                    </div>
                </div>
            </div>

            <div class="four columns">
                <div class="links">
                    <a href="<?php echo get_page_link( get_page_by_title( AdultJuniorLessons )->ID ); ?>"><img src="player2.png" alt="lessons"></a>
                    <div class="overlay">
                        <p>Adult/Junior Lessons</p>
                    </div>
                </div>
            </div>

            <div class="four columns">
                <div class="links">
                    <a href="<?php echo get_page_link( get_page_by_title( AdultLeagues )->ID ); ?>"><img src="player3.png" alt="lessons"></a>
                    <div class="overlay">
                        <p>Adult Leagues</p>
                    </div>
                </div>
            </div>
    </section>
</div>

<section class="row">
    <div class="twelve columns">
        <div class="border">
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="twelve columns" id="upcoming-events">
            <?php dynamic_sidebar('events'); ?>
        </div>
    </div>

<?php get_footer(); ?>
