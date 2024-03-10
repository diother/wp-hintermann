<?php 
    get_header();
    get_template_part('templates/content', 'header');
?>

<main>
    <?php
        $search_query = get_search_query();
        $search_results_count = $wp_query->found_posts;
    ?>
    <h1>Rezultate pentru: "<?php echo esc_html($search_query); ?>"</h1>
    <p class="showing">(<?php echo esc_html($search_results_count); ?> rezultate)</p>

    <?php if (have_posts()) : ?>
        <div class="search-container">
            <?php while (have_posts()) : the_post(); ?>
                <a class="result" href="<?php the_permalink(); ?>">
                    <?php 
                        $post_type = get_post_type();

                        if ($post_type == 'post') : ?>
                            <span class="post-type">Articol</span>

                        <?php elseif ($post_type == 'page') : ?>
                            <span class="post-type">Pagină</span>

                        <?php endif; ?>
                        
                    <h2><?php the_title(); ?></h2>
                    <span class="post-date"><?php echo get_the_time('M j, Y'); ?></span>
                </a>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p class="error">Niciun rezultat găsit. Te rugăm încearcă alt cuvânt.</p>
    <?php endif; ?>

</main>

<?php 
    get_template_part('templates/content', 'footer');
    get_footer();
?>