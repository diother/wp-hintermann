<?php 
    get_header();
    get_template_part('templates/content', 'header');
?>

<main>
    <div class="title-container">
    <h1>Ups! Pagina pe care o cauți nu există.</h1>
        <a class="desktop" href="<?php echo site_url(); ?>"><button class="arrow">Acasă</button></a>
    </div>
</main>

<?php 
    get_template_part('templates/content', 'footer');
    get_footer();
?>