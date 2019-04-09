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

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-5 contact">
                <div class="contact__header">
                    <a class="header__brand" href="<?php echo e(home_url('/')); ?>">
                        <img src="<?php echo e(get_field('logo', 'options')['url']); ?>" alt="Jartech">
                    </a>
                    <h2 class="contact__title subheader">
                        <?php echo $title; ?>

                    </h2>
                </div>
                <address class="contact__address">
                    <?php if($links): ?>
                    <ul class="contact__link-list">
                        <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="contact__link-item">
                            <a class="contact__link-item link secondary-body" href="<?php echo e($link['link']['url']); ?>">
                                <?php echo e($link['link']['title']); ?>

                            </a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <?php endif; ?>
                    <p class="footer__text secondary-body">
                        <?php echo e($address); ?>

                    </p>
                </address>
                <div class="contact__info secondary-body">
                    <?php if($tels): ?>
                        <span class="contact__info-label">
                          Tel:
                        </span>
                      <ul class="contact__info-list">
                        <?php $__currentLoopData = $tels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                          <a class="secondary-body contact__info-content" href="tel:<?php echo e(str_replace(' ', '', $tel['tel'])); ?>">
                            <?php echo e($tel['tel']); ?>

                          </a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </ul>
                      <?php endif; ?>
                    <?php if($mails): ?>
                    <span class="contact__info-label">
                        E-mail:
                    </span>
                    <ul class="contact__info-list">
                        <?php $__currentLoopData = $mails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                        <a class="link secondary-body" href="mailto:<?php echo e($mail['mail']); ?>">
                            <?php echo e($mail['mail']); ?>

                        </a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <?php endif; ?>
                </div> 
                <div class="contact__info secondary-body">
                    <span class="contact__info-label">
                        KRS:
                    </span>
                    <span class="contact__info-content">
                        <?php echo e($krs); ?>

                    </span>
                    <span class="contact__info-label">
                        NIP:
                    </span>
                    <span class="contact__info-content">
                        <?php echo e($nip); ?>

                    </span>
                    <span class="contact__info-label">
                        REGON:
                    </span>
                    <span class="contact__info-content">
                        <?php echo e($regon); ?>

                    </span>
                </div>    
            </div>
            <div class="col-12 offset-sm-1 col-sm-5">
                <?php echo $__env->make('components.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>
</section>