
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
                    echo "NULL";
                } else {
                    $boxraw = $boxpage->post_content;
                    echo apply_filters('the_content', $boxraw);
                };
            ?>
            <hr />
            <p>At this point we want to look up whether
            &#8220;<?php echo $boxtitle ?>&#8221; exists,
            and if it does render its contents here.</p>
            <p>If it does not we shall presumably have to
            get some default content from somewhere, or
            maybe avoid displaying the box at all!</p>
            <p>It might also be a good idea to prettify
            the CSS in this box, as it needs some TLC.</p>
        </div><!-- end: rightcolumn -->

<?php get_footer(); ?>

