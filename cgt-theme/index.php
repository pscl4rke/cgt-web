
<?php get_header(); ?>

        <div id="content">
            <?php if (have_posts()) while (have_posts()) : the_post(); ?>
                <h1><?php the_title() ?></h1>
                <?php the_content() ?>
            <?php endwhile; ?>
        </div><!-- end: content -->

		<div id="rightcolumn">
		  <h1><img src="images/OctaveC.jpg" width="210" height="147" /></h1>
		  <h1>&nbsp;</h1>
        </div><!-- end: rightcolumn -->

<?php get_footer(); ?>

