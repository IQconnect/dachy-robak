<?php    
  $phone = get_field('phone','options');
  $mail = get_field('mail','options'); 

  $sm = get_field('icons');
?>
<section class="infobar">
  <div class="container">
    <div class="row">
      <div class="infobar__wrapper col-12">
        <ul class="infobar__list">
          <?php if($phone): ?>
          <li class="infobar__elem">
            <a href="tel:<?php echo e(str_replace(' ', '',$phone)); ?>" class="text secoundary-body">
              <span class="infobar__icon fas fa-phone"></span>
              <?php echo e($phone); ?>

            </a>
          </li>
          <?php endif; ?>
          <?php if($phone): ?>
          <li class="infobar__elem">
            <a href="mailto:<?php echo e($mail); ?>" class="text secoundary-body">
              <span class="infobar__icon fas fa-envelope"></span>
                <?php echo e($mail); ?>

            </a>
          </li>
          <?php endif; ?>
        </ul>
        <?php if($sm): ?>
        <ul class="infobar__list">
        <?php $__currentLoopData = $sm; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li class="infobar__elem">
            <a href="<?php echo e($link['link']); ?>" class="text secoundary-body">
              <span class="infobar__icon infobar__icon--sm <?php echo e($link['icon']); ?>"></span>
            </a>
          </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

</div>
<header class="header" header>
  <div class="container">
    <div class="row">
      <a class="header__brand col-12 col-sm-2 col-xl-4" href="<?php echo e(home_url('/')); ?>">
        <img src="<?php echo e(get_field('logo', 'options')['url']); ?>" alt="Jartech">
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
      </nav>
    </div>
  </div>
</header>
