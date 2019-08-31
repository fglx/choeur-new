<?php get_header(); ?>
	<main id="content" class="content">
	<?php do_action( 'basic_main_content_404_inner_begin' ); ?>


    <?php do_action( 'basic_before_page_404_article' ); ?>
    <div class="post clearfix">
	    <h1><?php _e( '404 &ndash; Cette page n&rsquo;existe pas.', 'basic' ); ?></h1>

	    <?php do_action( 'basic_before_page_404_content_box' );  ?>
        <div class="entry-box clearfix">
            <p><?php _e( 'Il semblerait qu&rsquo;aucun r&eacute;sultat ne corresponde &agrave; cette adresse.', 'basic' ); ?></p>
            <p><?php _e( 'Pour vous consoler, voici un chaton:', 'basic' ); ?></p>
            <img src="/pics/404_chaton.jpg" alt="chaton" width="100%">
            <?php get_search_form(); ?>
        </div>
	    <?php do_action( 'basic_after_page_404_content_box' );  ?>

    </div>
    <?php do_action( 'basic_after_page_404_article' ); ?>


	<?php do_action( 'basic_main_content_404_inner_end' ); ?>
	</main> 
	<!-- END #content -->
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>