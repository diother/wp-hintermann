<?php 
    get_header();
    get_template_part('templates/content', 'header');
    get_template_part('templates/content', 'breadcrumbs');

    if (have_posts()) :
        the_post();
        $author = get_userdata(get_query_var('author'));
        $author_id = get_query_var('author'); 
?>
    <section class="author-info">
        <div class="center-container">
            <div class="avatar">
                <?php echo get_avatar($author->user_email, 150); ?>
            </div>
            <div class="author-details">
                <h1><?php echo esc_html($author->display_name); ?></h1>
                <p class="italic"><?php echo esc_html(the_author_meta('nickname', $author_id)); ?></p>
            </div>
            <div class="biography">
                <?php if (!empty($author->description)) : ?>
                    <p><?php echo esc_html($author->description); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php 
    endif;

    // Posts by the author
    $query = new WP_Query( array(
        'author'         => $author_id,
        'post_status'    => 'publish',
        'posts_per_page' => 5,
        'orderby'        => 'date',
    ) );

    if ($query->have_posts() ) {
        get_template_part( 'templates/content', 'articles', array(
            'headline' => 'De '.$author->display_name,
            'subheadline' => 'Descoperă mai multe articole informative și inspiraționale din lumea noastră caritabilă scrise de '.$author->display_name,
            'query' => $query
        ) );
    }

    // Explore Section
    get_template_part( 'templates/content', 'explore', array(
        '1_headline' => 'Ce susținem noi?',
        '1_excerpt' => 'Noi susținem inițiative cu impact local, îmbunătățind viețile oamenilor din comunitatea noastră.',
        '1_permalink' => site_url('despre-noi'),
        '2_headline'=> 'Noutăți',
        '2_excerpt' => 'Explorează articolele cele mai interesante în secțiunea noutăților, unde vei învăța despre tot ce se întâmplă în lumea noastră.',
        '2_permalink' => site_url('category/noutati')
    ) );

    get_template_part('templates/content', 'footer');
    get_footer();
?>