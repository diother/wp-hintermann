<?php 
    get_header();
    get_template_part('templates/content', 'header');
?>

<main>
    <section class="hero-section">
        <div class="title-container">
            <h1>Misiunea noastră — îmbunătățim viețile celor aflați în nevoie</h1>
            <p>Hintermann Charity s-a unit pentru a modela un viitor mai luminos pentru cei pe care îi servim din comunitățile noastre românești.</p>
            <a href="<?php echo site_url('category/proiecte'); ?>"><button>Vezi impactul Hintermann</button></a>
        </div>
        <div class="video-container">
            <video id="front-video" width="1280" height="720" autoplay="autoplay" loop muted playsinline poster="<?php echo get_theme_file_uri('./assets/poster.webp'); ?>">
                <source src="<?php echo get_theme_file_uri('./assets/intro.mp4'); ?>" type="video/mp4">
            </video>
        </div>
    </section>
    <?php
        // Projects Section
        $query = new WP_Query(array (
            'category_name'  => 'noutati',
            'post_status'    => 'publish',
            'posts_per_page' => 5,
            'orderby'        => 'date',
            'order'          => 'DESC'
        ) );

        if ($query->have_posts() ) {
            get_template_part( 'templates/content', 'articles', array(
                'headline'    => 'Noutăți',
                'subheadline' => 'Descoperă mai multe articole informative și inspiraționale din lumea noastră caritabilă.',
                'query'       => $query
            ) );
        }
    ?>
    <section class="about-us-section">
        <div class="title-container">
            <h1>Hintermann Charity</h1>
            <p>Hintermann Charity împuternicește donatorii să aibe un impact semnificativ și durabil în viețile celor în nevoie din comuntățile noastre.</p>
            <a href="<?php echo site_url('despre-noi'); ?>"><button>Mai multe despre Hintermann</button></a>
        </div>
        <div class="card-container">
            <div class="card">
                <svg width="100" height="100"><use href="<?php echo get_theme_file_uri('./assets/sprite.svg#analytics'); ?>"></use></svg>
                <div class="info-container">
                    <h2>Concentrați pe rezultate</h2>
                    <p class='description'>Impactul, eficiența, empatia, transparența și pasiunea ne ghidează în fiecare acțiune pe care o întreprindem.</p>
                </div>
            </div>
            <div class="card">
                <svg width="100" height="100"><use href="<?php echo get_theme_file_uri('./assets/sprite.svg#local'); ?>"></use></svg>
                <div class="info-container">
                    <h2>Împuternicind impactul local</h2>
                    <p class='description'>Suntem o asociație independentă din România, care își concentrează activitatea în jurul comunităților noastre locale.</p>
                </div>
            </div>
            <div class="card">
                <svg width="100" height="100"><use href="<?php echo get_theme_file_uri('./assets/sprite.svg#need'); ?>"></use></svg>
                <div class="info-container">
                    <h2>Atingerea nevoilor individuale</h2>
                    <p class='description'>Ne diferențiază concentrarea pe nevoile individuale și pe crearea de soluții care să genereze schimbări pozitive durabile.</p>
                </div>
            </div>
            <div class="card">
                <svg width="100" height="100"><use href="<?php echo get_theme_file_uri('./assets/sprite.svg#report'); ?>"></use></svg>
                <div class="info-container">
                    <h2>Raportare transparentă</h2>
                    <p class='description'>Implementarea inițiativelor și a proiectelor noastre este însoțită de documentare detaliată și raportare transparentă.</p>
                </div>
            </div>
        </div> 
    </section>
    <?php
        // News Section
        $query = new WP_Query(array (
            'category_name'  => 'proiecte',
            'post_status'    => 'publish',
            'posts_per_page' => 5,
            'orderby'        => 'date'
        ) );

        if ( $query->have_posts() ) {
            get_template_part( 'templates/content', 'articles', array(
                'headline' => 'Proiecte finalizate',
                'subheadline' => 'Aici poți explora proiectele noastre anterioare, citi rapoartele noastre, și afla cum poți deveni parte din această mișcare caritabilă.',
                'query'    => $query
            ) );
        }
        // Explore Section
        get_template_part( 'templates/content', 'explore', array(
            '1_headline'  => 'Ce susținem noi?',
            '1_excerpt'   => 'Noi susținem inițiative cu impact local, îmbunătățind viețile oamenilor din comunitatea noastră.',
            '1_permalink' => site_url('despre-noi'),
            '2_headline'  => 'Cum muncim?',
            '2_excerpt'   => 'Noi lucrăm prin echipă, inovație și dedicare pentru a transforma intenții în schimbări durabile în comunitate.',
            '2_permalink' => site_url('despre-noi')
        ) );
    ?>
</main>

<?php 
    get_template_part('templates/content', 'footer');
    get_footer();
?>