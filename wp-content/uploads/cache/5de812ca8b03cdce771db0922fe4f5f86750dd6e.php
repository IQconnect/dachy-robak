<header class="header" header>
  <div class="container">
    <div class="row">
      <a class="header__brand col-12 col-sm-2 col-xl-4" href="<?php echo e(home_url('/')); ?>">
        <img src="<?php echo e(get_theme_mod("upload_logo")); ?>" alt="Bungalowy">
      </a>
      <button class="header__hamburger hamburger" data-toggle-menu>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
      </button>
      <nav class="header__nav col-12 col-sm-10 col-xl-8" data-nav>
        <?php if(has_nav_menu('primary_navigation')): ?>
          <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'header__menu']); ?>

        <?php endif; ?>
        <?php if(get_theme_mod("sm_facebook")): ?>
        <ul class="header__sm sm">
          <li class="sm__elem">
          <a href="<?php echo e(get_theme_mod("sm_facebook")); ?>">
              <span class="fab fa-facebook-square"></span>
            </a>
          </li>
        </ul>
        <?php endif; ?>
      </nav>
    </div>
  </div>
</header>
