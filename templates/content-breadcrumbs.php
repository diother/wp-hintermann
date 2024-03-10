<section class="breadcrumbs">
    <div class="center-container">
        <a class="medium underline underline-hidden" href="<?php echo esc_url(home_url()); ?>">Acasă</a>
        <span class="separator">/</span>

        <?php if ( is_author() ) :
            $author = get_userdata(get_query_var('author'));

            if ($author): ?>
                <span class="title author-name"><?php echo esc_html($author->display_name); ?></span>
            <?php endif;
            
        elseif ( is_category() ) :
            $category = get_queried_object();

            if ($category): ?>
                <span class="title"><?php echo esc_html($category->name); ?></span>
            <?php endif;
            
        else:
            $categories = get_the_category();
            
            if ( !empty($categories) ) :
                $first_category = $categories[0]; ?>
                <a class="underline underline-hidden" href="<?php echo esc_url(get_category_link($first_category->term_id)); ?>">
                    <?php echo esc_html($first_category->name); ?>
                </a>
                <span class="separator">/</span>
            <?php endif; ?>

            <span class="title"><?php the_title(); ?></span>
        <?php endif; ?>
    </div>
</section>