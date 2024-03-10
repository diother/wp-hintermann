<section class="explore-section">
    <div class="title-container">
        <h1>Explorează mai mult</h1>
        <div class="subtitle-container">
            <p>Descoperă mai multe din lumea Hintermann Charity și modul în care ne implicăm pentru a face o diferență reală în viețile oamenilor.</p>
            <a href="<?php echo site_url('despre-noi'); ?>"><button>Mai multe despre Hintermann</button></a>
        </div>
    </div>
    <div class="explore-container">
        <a class="explore" href="<?php echo esc_url($args['1_permalink']); ?>">
            <div class="info-container">
                <h2><?php echo $args['1_headline']; ?></h2>
                <p><?php echo $args['1_excerpt']; ?></p>
            </div>
            <span>
                Citește mai mult
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"  viewBox="0 -960 960 960"><path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z"/></svg>
            </span>
        </a>
        <a class="explore" href="<?php echo esc_url($args['2_permalink']); ?>">
            <div class="info-container">
                <h2><?php echo $args['2_headline']; ?></h2>
                <p><?php echo $args['2_excerpt']; ?></p>
            </div>
            <span>
                Citește mai mult
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"  viewBox="0 -960 960 960"><path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z"/></svg>
            </span>
        </a>
    </div>
</section>