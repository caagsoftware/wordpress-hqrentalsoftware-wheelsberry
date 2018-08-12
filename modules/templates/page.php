<?php
$page_slider = wheelsberry_get_page_slider($post->ID);
wheelsberry_custom_sidebar_setup($post->ID);
get_header();
?>
<?php if (isset($page_slider) && $page_slider && $page_slider['layout'] != 'below') wheelsberry_tpl_header_slider($page_slider) ?>
<?php
//wheelsberry_tpl_reservation_form($post->ID)
echo do_shortcode('[hq_wheels_home_slider_banner]');
?>
<?php if (isset($page_slider) && $page_slider && $page_slider['layout'] == 'below') wheelsberry_tpl_header_slider($page_slider) ?>
    <div class="content">
        <?php wheelsberry_tpl_page_title($post->ID, the_title('', '', false)) ?>
        <div class="content-columns om-container">
            <div class="content-columns__content">
                <div class="content-columns__content-inner">
                    <?php while (have_posts()) : the_post(); ?>
                        <article>
                            <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                                <?php add_filter('the_content', 'wheelsberry_the_content_container', 999999);
                                the_content();
                                remove_filter('the_content', 'wheelsberry_the_content_container'); ?>
                            </div>
                        </article>
                    <?php endwhile; ?>

                    <div class="om-container">
                        <?php wheelsberry_wp_link_pages(); ?>

                        <?php get_template_part('includes/comments'); ?>
                    </div>
                </div>
            </div>

            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>