<?php
    $title = get_field('partners_title', 'options');
    $partners = get_field('partners_images', 'options');
?>

<section class="section">
  <div class="section__wrapper section__wrapper--space row">
      <?php echo $__env->make('components.section-header' , ['title' => $title, 'link'=> get_permalink(14)], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php if($partners): ?>
      <ul class="brands">
        <?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $elem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
          <?php echo $__env->make('components.brand', ['data' => $elem], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul> 
      <?php endif; ?>
  </div>
</section>
