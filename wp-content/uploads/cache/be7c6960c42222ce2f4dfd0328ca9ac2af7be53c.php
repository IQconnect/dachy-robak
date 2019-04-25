<?php
    $gallery = $data['gallery'];
?>

<section class="section">
  <div class="section__wrapper row">
      <?php if($gallery): ?>
      <ul class="gallery">
        <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $elem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <a href="<?php echo e($elem['url']); ?>" data-fancybox="gallery">
              <?php echo wp_get_attachment_image($elem['ID'], 'large'); ?>

          </a>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
      <?php endif; ?>
  </div>
</section>
