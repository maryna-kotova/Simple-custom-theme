<footer class="mk-footer">
    <?php
    if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
    }
    ?>
    <div id="footer-widgets">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer') ) : ?>
        <?php endif; ?>
    </div>
    <p><?php the_field('copyright'); ?></p>
</footer>
<?php wp_footer(); ?>
</body>
</html>