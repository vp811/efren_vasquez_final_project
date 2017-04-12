        <footer >
            <div class="row">
                <div class="four columns">
                    <?php dynamic_sidebar('footer-one'); ?>
                </div>

                <div class="four columns">
                    <img id="footer-logo" src="tennis2.png" alt="logo">
                </div>

                <div class="four columns">
                    <h3 id="follow">FOLLOW US:</h3>
                    <?php dynamic_sidebar('footer-three'); ?>
                </div>
            </div>

            <div class="row">
                <div class="twelve columns">
                    <?php wp_nav_menu(array(
                            'theme_location'     =>  'menu-footer',
                			'sort_column'        =>  'menu_order',
                			'container_class'    =>  'menu-footer'
                		));
                    ?>
                </div>
        </footer>
    <?php wp_footer(); ?>
</body>
</html>
