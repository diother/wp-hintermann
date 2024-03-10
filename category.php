<?php 
    get_header();
    get_template_part('templates/content', 'header');
    get_template_part('templates/content', 'breadcrumbs');

    $cat = get_queried_object();
?>
<main>
    <h1><?php echo esc_html($cat->name); ?></h1>
    <section class="category-posts">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'cat' => $cat->term_id,
            'posts_per_page' => 9,
            'paged' => $paged,
        );
        
        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
        ?>
                <a class="article" href="<?php esc_url(the_permalink()); ?>">
                    <div class="meta-container">
                        <div class="img-container"><?php the_post_thumbnail( 'medium' ); ?></div>
                        <h2><?php the_title(); ?></h4>
                        <span><?php the_excerpt(); ?></span>
                    </div>
                    <span>
                        Citește mai mult
                        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"  viewBox="0 -960 960 960"><path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z"/></svg>
                    </span>
                </a>
        <?php
            endwhile;

        else :
            echo 'Nicio postare găsită';
        endif;

        wp_reset_postdata();
        ?>
    </section>
    <?php 
        // Pagination
        if (function_exists('wp_pagenavi')) :
            wp_pagenavi(array('query' => $query));

        else : 
    ?>
            <div class="pagination">
                <span class="previous underline"><?php previous_posts_link('Înapoi', $query->max_num_pages); ?></span>
                <span class="next underline"><?php next_posts_link('Următoarea pagină', $query->max_num_pages); ?></span>
            </div>
    <?php
        endif;
    ?>
</main>
    <?php 

    // Explore Section
    get_template_part( 'templates/content', 'explore', array(
        '1_headline' => 'Ce susținem noi?',
        '1_excerpt' => 'Noi susținem inițiative cu impact local, îmbunătățind viețile oamenilor din comunitatea noastră.',
        '1_permalink' => site_url('munca-noastra'),
        '2_headline'=> 'Cum muncim?',
        '2_excerpt' => 'Noi lucrăm prin echipă, inovație și dedicare pentru a transforma intenții în schimbări durabile în comunitate.',
        '2_permalink' => site_url('despre-noi')
    ) );

    get_template_part('templates/content', 'footer');
    get_footer();
?>