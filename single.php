<?php 
    get_header();
    get_template_part('templates/content', 'header');
    get_template_part('templates/content', 'breadcrumbs');

    if ( have_posts() ) :
?>

<main>
    <?php
    while ( have_posts() ) :
        the_post(); ?>

        <h1 class="title"><?php the_title(); ?></h1>
        <div class="thumbnail">
            <div class="img-container">
                <?php the_post_thumbnail( 'full' ); ?>
            </div>
            <div class="caption-container">
                <span class="caption"><?php the_post_thumbnail_caption(); ?></span>
            </div>
        </div>
        <div class="body-container">
            <div class="author-short">
                <div class="avatar"><?php echo get_avatar(get_the_author_meta('user_email'), 100); ?></div>
                <span class="name">
                    De 
                    <span class="underline"><?php esc_url(the_author_posts_link()); ?></span>
                </span>
                <span class="function"><?php the_author_meta('nickname'); ?></span>
                <a class="learn-more" href="#author-long"><span class="underline">Mai multe despre autor</span></a>
                <span class="publication-date"><?php the_time('M j, Y'); ?></span>
            </div>
            <div class="body"><?php the_content(); ?></div>
            <div class="social-container">
                <a href="" aria-label="facebook"><svg id="facebook" width="36" height="36"><use href="<?php echo get_theme_file_uri('./assets/sprite.svg#facebook-dark'); ?>"></use></svg></a>
                <a href="" aria-label="twitter"><svg id="twitter" width="36" height="36"><use href="<?php echo get_theme_file_uri('./assets/sprite.svg#twitter-dark'); ?>"></use></svg></a>
                <a href="" aria-label="linkedin"><svg id="linkedin" width="36" height="36"><use href="<?php echo get_theme_file_uri('./assets/sprite.svg#linkedin-dark'); ?>"></use></svg></a>
                <a href="" aria-label="instagram"><svg id="instagram" width="36" height="36"><use href="<?php echo get_theme_file_uri('./assets/sprite.svg#instagram-dark'); ?>"></use></svg></a>
            </div>
        </div>
        <div id="author-long">
            <div class="avatar"><?php echo get_avatar(get_the_author_meta('user_email'), 100); ?></div>
            <span class="name">
                De 
                <span class="underline"><?php esc_url(the_author_posts_link()); ?></span>
            </span>
            <span class="function"><?php the_author_meta('nickname'); ?></span>
            <p class="biography"><?php the_author_meta('description'); ?></p>
            <span class="date">
                Publicat: 
                <span><?php the_time('M j, Y'); ?></span>
            </span>
        </div>
    <?php endwhile; ?>
 </main>

<?php 
    endif;

    // News Section
    $categories = get_the_category();

    if ( !empty($categories) ) {
        $slug = $categories[0]->slug;
        $current_post_id = get_the_ID();

        $headline = 'Citește mai departe mai multe articole';
        $subheadline = 'Descoperă mai multe articole informative și inspiraționale din lumea noastră caritabilă.';

        if ($slug == 'noutati') {
            $headline = 'Alte noutăți';
            $subheadline = 'Fii la curent cu proiectele noastre în derulare și află cum poți contribui la schimbarea vieților încă neajutorate.';
        }
        if ($slug == 'proiecte') {
            $headline = 'Alte proiecte finalizate';
            $subheadline = 'Descoperă impactul real pe care l-am avut în viețile oamenilor și cum ai contribuit la aceste povești de succes.';
        }
    
        $query = new WP_Query(array (
            'category_name'  => $slug,
            'post_status'    => 'publish',
            'posts_per_page' => 5,
            'orderby'        => 'date',
            'post__not_in'   => array($current_post_id)
        ));

        if ($query->have_posts() ) {
            get_template_part( 'templates/content', 'articles', array(
                'headline' => $headline,
                'subheadline' => $subheadline,
                'query' => $query
            ) );
        }
    }   

    // Explore Section
    get_template_part( 'templates/content', 'explore', array(
        '1_headline' => 'Ce susținem noi?',
        '1_excerpt' => 'Noi susținem inițiative cu impact local, îmbunătățind viețile oamenilor din comunitatea noastră.',
        '1_permalink' => site_url('despre-noi'),
        '2_headline'=> 'Cum muncim?',
        '2_excerpt' => 'Noi lucrăm prin echipă, inovație și dedicare pentru a transforma intenții în schimbări durabile în comunitate.',
        '2_permalink' => site_url('despre-noi')
    ) );

    get_template_part('templates/content', 'footer');
    get_footer();
?>