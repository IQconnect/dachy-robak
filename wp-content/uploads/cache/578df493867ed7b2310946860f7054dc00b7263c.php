<?php
    $title = get_field('footer_title', 'options');
    $address = get_field('footer_address', 'options');
    $links = get_field('footer_links', 'options');
    $mails = get_field('footer_mails', 'options');
    $tels = get_field('footer_tel', 'options');
    $krs = get_field('footer_krs', 'options');
    $nip = get_field('footer_nip', 'options');
    $regon = get_field('footer_regon', 'options');
?>

<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-3">
        <a class="footer__brand header__brand" href="<?php echo e(home_url('/')); ?>">
          <img src="<?php echo e(get_field('logo', 'options')['url']); ?>" alt="Jartech">
        </a>
      </div>
      <div class="col-12 col-sm-3 footer__wrapper">
        <p class="footer__title subheader">
          <?php echo e($title); ?>

        </p>
        <p class="footer__text secondary-body">
            <?php echo e($address); ?>

        </p>
        <?php if($links): ?>
        <ul class="footer__link-list">
          <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li class="footer__link-item">
            <a class="footer__link-item link secondary-body" href="<?php echo e($link['link']['url']); ?>">
              <?php echo e($link['link']['title']); ?>

            </a>
          </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <?php endif; ?>
      </div>
      <div class="col-12 col-sm-3 footer__wrapper">
        <address class="footer__info secondary-body">
          
          <?php if($tels): ?>
            <span class="footer__info-label">
              Tel:
            </span>
          <ul class="footer__info-list">
            <?php $__currentLoopData = $tels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
              <a class="secondary-body footer__info-content" href="tel:<?php echo e(str_replace(' ', '', $tel['tel'])); ?>">
                <?php echo e($tel['tel']); ?>

              </a>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
          <?php endif; ?>
          <?php if($mails): ?>
          <span class="footer__info-label">
            E-mail:
          </span>
          <ul class="footer__info-list">
            <?php $__currentLoopData = $mails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
              <a class="link secondary-body" href="mailto:<?php echo e($mail['mail']); ?>">
                <?php echo e($mail['mail']); ?>

              </a>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
          <?php endif; ?>
        </address>    
      </div>
      <div class="col-12 col-sm-3 footer__wrapper">
          <address class="footer__info secondary-body">
            <span class="footer__info-label">
              KRS:
            </span>
            <span class="footer__info-content">
              <?php echo e($krs); ?>

            </span>
            <span class="footer__info-label">
              NIP:
            </span>
            <span class="footer__info-content">
              <?php echo e($nip); ?>

            </span>
            <span class="footer__info-label">
              REGON:
            </span>
            <span class="footer__info-content">
              <?php echo e($regon); ?>

            </span>
          </address>    
        </div>
    </div>
    <div class="col-12">
      <img class="footer__baner" src="<?= App\asset_path('images/eu-1.jpg'); ?>" alt="UE">
    </div>
  </div>
  <div class="footer__made-wrapper container-fluid">
    <div class="row">
      <div class="col-12">
        <a href="http://iqconnect.pl">
          <img src="<?= App\asset_path('images/logo.png'); ?>" alt="strony internetowe iqconnect.pl" class="footer__made-by">
        </a>
      </div>
    </div>
  </div>
</footer>

<script>
  $(function() {
      $('#form').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
          type: 'post',
          url: 'http://mazurytobiznes.pl/mail.php',
          data: $('form').serialize(),
          success: function () {
            alert('Wiadomość została wysłana!');
          }
        });
      });
  });
</script>