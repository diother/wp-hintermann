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
        <?php 
            $thumbnail = get_the_post_thumbnail();

            if ( !empty($thumbnail) ) : ?>
                <div class="thumbnail">
                    <div class="img-container">
                        <?php the_post_thumbnail( 'full' ); ?>
                    </div>
                    <?php 
                        $caption = get_the_post_thumbnail_caption();

                        if ( !empty($caption) ) : ?>
                            <div class="caption-container">
                                <span class="caption"><?php echo $caption; ?></span>
                            </div>
                        <?php endif; ?>
                </div>
        <?php endif; ?>
        <div class="body"><?php the_content(); ?></div>
    <?php endwhile; ?>
</main>

<?php 
    endif;

    // Explore Section
    get_template_part( 'templates/content', 'explore', array(
        '1_headline' => 'Ce susținem noi?',
        '1_excerpt' => 'Noi susținem inițiative cu impact local, îmbunătățind viețile oamenilor din comunitatea noastră.',
        '1_permalink' => site_url('despre-noi'),
        '2_headline'=> 'Noutăți',
        '2_excerpt' => 'Citiți ultimele noutăți și evenimente care ne țin în mișcare.',
        '2_permalink' => site_url('category/noutati')
    ) );

    get_template_part('templates/content', 'footer');
    get_footer();
?>