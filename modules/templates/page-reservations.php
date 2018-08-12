<?php

get_header();
global $post;
?>
    <div class="content">

        <div class="content-columns om-container">
            <div class="content-columns__content">
                <div class="content-columns__content-inner">
                    <?php while (have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
    <style>
        body {
            background-color: #fff;
        }
    </style>
<?php get_footer(); ?>