<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a href="" class="navbar-brand">
                <?php if(get_field('main_logo', 'option')): ?>
                    <img src="<?=get_field('main_logo', 'option');?>" alt="" class="navbar-brand-image">
                <?php else: ?>
                    <img src="<?=get_template_directory_uri();?>/assets/images/image-coming-soon.jpg" alt="" class="navbar-brand-image-temp" style=' height: 75px; margin:0; width: auto'>
                <?php endif; ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <?php 
                wp_nav_menu(array(
                    'theme_location' => 'main_header_menu_nav',
                    'depth' => '2',
                    'container' => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'navigation',
                    'menu_class' => 'navbar-nav ms-auto',
                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                    'walker' => new WP_Bootstrap_Navwalker(),
                ));
            ?>
        </nav>
    </div>
</header>