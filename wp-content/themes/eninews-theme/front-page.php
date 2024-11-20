<?php get_header(); ?>
    <body>
<?php get_template_part("header2") ?>
<?php get_template_part("navbar"); ?>
<?php get_sidebar(); ?>
    <div id="gauche">
        <?php
        $args['category_name'] = 'France';
        $args['posts_per_page'] = 3;

        //Autres arguments possibles (exemples)
        // $args = ['post_type'] = 'posts'; // ou 'page

        // $args = ['order'] = 'DESC';

        $query = new WP_Query($args);

        // Attention : il faut appliquer $query-> aux méthodes have_posts() et the_post()
        if ($query->have_posts()) {

            while ($query->have_posts()) {

                $query->the_post();

                if (has_post_thumbnail()) {
                    ?>
                    <div class='thumbnail'>
                        <a href="<?= the_permalink(); ?>" title="Voir l'article">
                            <?php the_post_thumbnail('thumbnail', array('class' => 'thumbnail-border')); ?>
                        </a>
                    </div>
                <?php } ?>
                <h2><?php the_title(); ?> (Article n°<?php the_ID(); ?>)</h2>
                <div><?php the_excerpt(); ?></div>
                <div class="stop-float"></div>
                <div><a href="<?php the_permalink(); ?>">Voir l'article</a> | <i>Publié le <?php the_date_xml(); ?>
                        par <?php the_author(); ?></i> dans : <?php the_category(); ?></div>
                <hr>
                <?php
            } // -- while

            // On réinitialise les données : obligatoire si plusieurs
            // boucles dans la page / boucles imbriquées
            wp_reset_postdata();
        } else {
            echo "<div>Aucun article publié</div>\n";
        }
        ?>
    </div> <!-- #gauche -->
<?php get_footer(); ?>