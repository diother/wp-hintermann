<header class="is-top">
    <div class="center-container">
        <nav class="header-navigation">
            <a class="header-logo" href="<?php echo site_url(); ?>">
                <svg id="logo" width="27" height="27"><use href="<?php echo get_theme_file_uri('./assets/sprite.svg#logo'); ?>"></use></svg>
                <span class="logo-text">Hintermann Charity</span>
            </a>
            <a href="<?php echo site_url('despre-noi'); ?>">Despre noi</a>
            <a href="<?php echo site_url('contact'); ?>">Contact</a>
            <a href="<?php echo site_url('category/noutati'); ?>">Noutăți</a>
            <a href="<?php echo site_url('category/proiecte'); ?>">Povești</a>
        </nav>
        <div class="header-icons">
            <div class="search-container">
                <span class="underline">Căutare</span>
                <div class="icon-container">
                    <svg id="search" width="26" height="26" viewBox="0 -960 960 960" xmlns="http://www.w3.org/2000/svg" >
                        <path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/>
                    </svg>
                    <svg class="close" width="26" height="26" viewBox="0 -960 960 960" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/>
                    </svg>
                </div>
            </div>
            <div class="menu-container">
                <div class="icon-container">
                    <svg id="menu" width="26" height="26" viewBox="0 -960 960 960" xmlns="http://www.w3.org/2000/svg">
                        <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/>
                    </svg>
                    <svg class="close" width="26" height="26" viewBox="0 -960 960 960" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/>
                    </svg>
                </div>
            </div>
            <a href="<?php echo site_url('contact'); ?>"><button>Contactează-ne</button></a>
        </div>
    </div>
</header>
<div class="mobile-menu">
    <a href="<?php echo site_url('despre-noi'); ?>">Despre noi</a>
    <a href="<?php echo site_url('contact'); ?>">Contact</a>
    <a href="<?php echo site_url('category/noutati'); ?>">Noutăți</a>
    <a href="<?php echo site_url('category/proiecte'); ?>">Povești</a>
</div>
<div class="search-window">
    <form class="center-container" role="search" method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
        <input class="medium" type="text" value="" name="s" id="s" placeholder="Caută">
        <button type="submit" id="searchsubmit">Caută</button>
    </form>
</div>