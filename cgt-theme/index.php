
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
		  <h1><img src="images/OctaveC.jpg" width="210" height="147" /></h1>
		  <h1>&nbsp;</h1>
        </div><!-- end: rightcolumn -->

<?php get_footer(); ?>

