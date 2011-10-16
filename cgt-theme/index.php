
<?php get_header(); ?>

        <div id="content">
            <?php if (have_posts()) while (have_posts()) : the_post(); ?>
                <h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
                <?php if (!is_page()) : ?>
                    <span class="notes">By <?php the_author() ?> on <?php the_date() ?>.</span>
                <?php endif; ?>
                <?php the_content() ?>
            <?php endwhile; ?>
        </div><!-- end: content -->

        <div id="rightcolumn">
            <?php
                global $wp_query;
                $type = $wp_query->post->post_type;
                $title = $wp_query->post->post_title;
                if ($type == 'post') { $title = 'News'; };
                $boxtitle = $title . " Box";
                $boxpage = get_page_by_title($boxtitle);
                if ($boxpage == null) {
                    echo "&nbsp;";
                } else {
                    $boxraw = $boxpage->post_content;
                    echo apply_filters('the_content', $boxraw);
                };
            ?>
        </div><!-- end: rightcolumn -->

<?php get_footer(); ?>

