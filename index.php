<?php get_header(); ?>

<!-- Begin Section Container -->

    <section class="row">
                <div class="six columns">
                    <div id="intro">
                        <?php dynamic_sidebar('first-widget'); ?>
                    </div>
                </div>

                <div class="six columns">
                        <img id="player" src="https://image.ibb.co/hmjgWQ/player.png" alt="player" />
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
                    <img src="https://image.ibb.co/kjy8BQ/player1.png" alt="lessons">
                    <a href="<?php echo get_page_link( get_page_by_title( AfterSchoolPrograms )->ID ); ?>">
                        <div class="overlay">
                            <p>After School Programs</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="four columns">
                <div class="links">
                        <img src="https://image.ibb.co/kkp4kk/player2.png" alt="lessons">
                    <a href="<?php echo get_page_link( get_page_by_title( AdultJuniorLessons )->ID ); ?>">
                        <div class="overlay">
                            <p>Adult/Junior Lessons</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="four columns">
                <div class="links">
                    <img src="https://image.ibb.co/k9jFrQ/player3.png" alt="lessons">
                    <a href="<?php echo get_page_link( get_page_by_title( AdultLeagues )->ID ); ?>">
                        <div class="overlay">
                        <p>Adult Leagues</p>
                        </div>
                    </a>
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
        <div class="twelve columns">
            <h1 id="news">Fort King Tennis Center News and Upcoming Events</h1>
        </div>
    </div>

    <div class="row">
        <div class="six columns">
            <img src="https://image.ibb.co/jghqQk/balls.png" alt="balls">
        </div>

        <div class="six columns">
            <?php dynamic_sidebar('events'); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
