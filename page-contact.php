<?php 
    get_header();
    get_template_part('templates/content', 'header');
    get_template_part('templates/content', 'breadcrumbs'); 
?>

<main>
    <h1 class="title">Contact</h1>

    <div class="body">
        <p>Suntem încântați să intrăm în legătură cu voi! Dacă aveți întrebări, feedback sau doriți să aflați mai multe despre Hintermann și inițiativele noastre, vă rugăm să ne contactați folosind detaliile de mai jos. Ne-am dori să vă cunoaștem și să vă oferim toate informațiile de care aveți nevoie.</p>
        
        <section class="contact-section">
            <p><strong>Adresă:</strong></p>
            <p>Strada Spicului, Nr. 12, Brașov, România</p>
            <br>
            <p><strong>Telefon:</strong></p>
            <p><span class="underline">+40 (799) 400 040</span></p>
            <br>
            <p><strong>Email:</strong></p>
            <p>contact@hintermann.ro</p>
            <br>
            <p><strong>Rețele de socializare:</strong></p>
            <br>
            <div class="social-container">
                <a href="" aria-label="facebook"><svg id="facebook" width="36" height="36"><use href="<?php echo get_theme_file_uri('./assets/sprite.svg#facebook-dark'); ?>"></use></svg></a>
                <a href="" aria-label="twitter"><svg id="twitter" width="36" height="36"><use href="<?php echo get_theme_file_uri('./assets/sprite.svg#twitter-dark'); ?>"></use></svg></a>
                <a href="" aria-label="linkedin"><svg id="linkedin" width="36" height="36"><use href="<?php echo get_theme_file_uri('./assets/sprite.svg#linkedin-dark'); ?>"></use></svg></a>
                <a href="" aria-label="instagram"><svg id="instagram" width="36" height="36"><use href="<?php echo get_theme_file_uri('./assets/sprite.svg#instagram-dark'); ?>"></use></svg></a>
            </div>
        </section>

        <p>Vă rugăm să ne lăsați un mesaj și vă vom răspunde în cel mai scurt timp posibil. Echipa noastră este aici pentru a vă ajuta și pentru a vă oferi sprijin în orice fel avem capacitatea.</p>
    </div>
</main>

<?php 
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