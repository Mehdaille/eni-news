<?php get_header(); ?>
    <body>
<?php get_template_part("header2") ?>
<?php get_template_part("navbar"); ?>
<?php get_sidebar(); ?>
    <div id="gauche">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <!--                 Affichage de la miniature-->
            <?php if (has_post_thumbnail() ) { ?>
                <div class='thumbnail'>
                    <a href="<?= the_permalink(); ?>" title="Voir l'article">
                        <?php the_post_thumbnail('thumbnail', array('class' => 'thumbnail-border') ); ?>
                    </a>
                </div>
            <?php } ?>
                <h2><?php the_title(); ?> (Article n°<?php the_ID(); ?>)</h2>
                <div><?php the_excerpt(); ?></div>
            <div class="stop-float"></div>
                <div><a href="<?php the_permalink(); ?>">Voir l'article</a> | <i>Publié le <?php the_date_xml(); ?>
                        par <?php the_author(); ?></i> dans : <?php the_category(); ?></div>
                <hr>
            <?php endwhile; ?>
        <?php else : ?>
            <div>Aucun article publié</div>
        <?php endif; ?>
    </div>
<?php get_footer(); ?>