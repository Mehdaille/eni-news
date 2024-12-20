<?php get_header(); ?>
    <body>
<?php get_template_part("header2") ?>
<?php get_template_part("navbar"); ?>
<?php get_sidebar(); ?>
    <div id="gauche">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <h2><?php the_title(); ?> (Article n°<?php the_ID(); ?>)</h2>
                <div><?php the_excerpt(); ?></div>
                <div><a href="<?php the_permalink(); ?>">Voir l'article</a> | <i>Publié le <?php the_date_xml(); ?>
                        par <?php the_author(); ?></i> dans <?php the_category(); ?></div>
            <?php endwhile; ?>
        <?php else : ?>
            <div>Aucun article publié</div>
        <?php endif; ?>
    </div >
<?php
the_post_navigation(array(
    'prev_text' => __('Previous Post') . '<span>%title</span>',
    'next_text' => __('Next Post') . '<span>%title</span>',
));
?>
<?php get_footer(); ?>