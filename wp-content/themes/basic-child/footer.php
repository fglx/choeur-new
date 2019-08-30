</div>
<!-- #main -->

<?php do_action( 'basic_before_footer' ); ?>

<footer id="footer" class="<?php echo apply_filters( 'basic_footer_class', '' );?>">

    <?php if ( apply_filters( 'basic_footer_copyrights_enabled', true ) ) : ?>
        <div class="<?php echo apply_filters( 'basic_footer_copyrights_class', 'copyrights maxwidth grid' );?>">
            <div class="<?php echo apply_filters( 'basic_footer_copytext_class', 'copytext col6' );?>">
                <p id="copy">
                    <!--noindex--><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="nofollow">La Voix en Ch&oelig;ur &agrave; C&oelig;ur</a><!--/noindex--> &copy; <?php echo date("Y",time()); ?>
                    <br/>
                    <span class="copyright-text"><?php echo basic_get_theme_option('copyright_text'); ?></span>
                    <?php if ( function_exists( 'the_privacy_policy_link' ) ) {
                        the_privacy_policy_link( '<br>' );
                    } ?>
                </p>
            </div>

            <div class="<?php echo apply_filters( 'basic_footer_themeby_class', 'themeby col6 tr' );?>">
                <p>
                    <img id="footer-flower" src="/pics/flower-footer.png" alt="purple flower">
                </p>
                <?php $counters = basic_get_theme_option('footer_counters'); ?>
                <div class="footer-counter"><?php echo wp_specialchars_decode( $counters, ENT_QUOTES ); ?></div>
            </div>
        </div>
    <?php endif; ?>
    <?php do_action( 'basic_after_footer_copyrights' ); ?>

</footer>
<?php do_action( 'basic_after_footer' ); ?>


</div>
<!-- .wrapper -->

<!--<a id="toTop">&#10148;</a>-->

<?php wp_footer(); ?>

</body>
</html>