<?php    
  $phone = get_field('phone','options');
  $mail = get_field('mail','options'); 

  $sm = get_field('icons');
?>

<header class="header" header>
  <div class="container">
    <div class="row">
      <div class="col header__wrapper">
        <a class="header__brand" href="<?php echo e(home_url('/')); ?>">
          <img src="<?php echo e(get_field('logo', 'options')['url']); ?>" alt="Jartech">
        </a>
        <button class="header__hamburger hamburger" data-toggle-menu>
          <span class="hamburger__line"></span>
          <span class="hamburger__line"></span>
          <span class="hamburger__line"></span>
        </button>
        <nav class="header__nav" data-nav>
          <?php if(has_nav_menu('primary_navigation')): ?>
            <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'header__menu']); ?>

          <?php endif; ?>
        </nav>
      </div>
    </div>
  </div>
</header>
