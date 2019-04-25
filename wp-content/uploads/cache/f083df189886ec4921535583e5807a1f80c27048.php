<?php $__env->startSection('content'); ?>
  
  

  <?php $sections = get_field('components') ?>
  
  <?php if($sections): ?>
    <?php $__currentLoopData = $sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php ($sectionName = $section['acf_fc_layout']) ?>

      <?php echo $__env->make('partials.' . $sectionName, ['data' => $section], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php endif; ?>
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>