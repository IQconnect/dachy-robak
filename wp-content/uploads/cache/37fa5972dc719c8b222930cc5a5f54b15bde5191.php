
<?php
    $title = get_field('contact_title','options');
    $numbers = get_field('contact_numbers','options');
?>

<section class="section section--center">
    <div class="section__wrapper section__wrapper--space row">
        <div class="col-12 contact">
            <header class="contact__header">
                <h3 class="subheader">
                    <?php echo $title; ?>  
                </h3>
            </header>
            <?php if($numbers): ?>
            <ul class="contact__list">
                <?php $__currentLoopData = $numbers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $number): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="contact__elem">
                    <a href="tel:<?php echo e(phone_number($number['number'])); ?>" class="headline"> 
                        <?php echo $number['number']; ?>

                    </a>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <?php endif; ?>
            <footer class="contact__header">
                <a href="mailto:dachy-robak@dachy-robak.pl" class="subheader">
                    dachy-robak@dachy-robak.pl  
                </a>
            </footer>
        </div>
    </div>
  </section>