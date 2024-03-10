<section class="articles-section glide">
    <div class="title-container">
        <h1><?php echo $args['headline']; ?></h1>
        <div class="subheadline-container">
            <p><?php echo $args['subheadline']; ?></p>
            <div class="button-container" data-glide-el="controls">
                <div class="button" data-glide-dir="<">
                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"  viewBox="0 -960 960 960"><path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z"/></svg>
                </div>
                <div class="button" data-glide-dir=">">
                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"  viewBox="0 -960 960 960"><path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z"/></svg>
                </div>
            </div>
        </div>
    </div>
    <div class="articles-container glide__track" data-glide-el="track">
        <div class="glide__slides">
            <?php
                while ( $args['query']->have_posts() ) :
                    $args['query']->the_post();
            ?>
                    <a class="article glide__slide" href="<?php esc_url(the_permalink()); ?>">
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
                wp_reset_postdata();
            ?>
        </div>
    </div>
</section>