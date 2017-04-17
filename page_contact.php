<?php
/*
Template Name: Contact
*/
?>


<?php get_header(); ?>

<!-- Begin Section Container -->
    <section class="row">
        <div class="twelve columns">
            <h2 id="contact">Contact Us</h2>
    </section>
    <section class="row">
        <div class="twelve columns">
            <form method="post" action="contact-form.php">

        		<label for="First Name">First Name:</label>
        		<input type="text" name="First Name"  />

                <label for="Last Name">Last Name:</label>
        		<input type="text" name="Last-Name" id="last-name" />

        		<label for="Email">Email:</label>
        		<input type="text" name="Email" id="email" />

                <label for="Phone">Phone:</label>
        		<input type="text" name="Phone" id="phone" />

        		<label for="Message">Message:</label><br />
        		<textarea name="Message" rows="20" cols="30" id="message"></textarea><br/>

        		<input type="submit" name="submit" value="Submit" class="submit-button" />
                <input type="reset" name="reset" value="Reset" class="reset-button" />
        	</form>
        </div>
    </section>

    <section class="row">
        <div class="six columns">
            <?php dynamic_sidebar('contact-widget'); ?>
        </div>
        <div class="six columns">
            <?php dynamic_sidebar('contact-widget-social'); ?>
        </div>
    </section>
</div>
<!-- End Section -->

<?php get_footer(); ?>
