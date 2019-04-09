  <?php $__env->startSection('content'); ?>

  <?php $sections = get_field('components') ?>
  
  
  <?php $__currentLoopData = $sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php ($sectionName = $section['acf_fc_layout']) ?>

     
    <?php echo $__env->renderWhen($sectionName == 'slider', 'partials.slider', ['data' => $section], array_except(get_defined_vars(), array('__data', '__path'))); ?>

     
    <?php echo $__env->renderWhen($sectionName == 'Hero', 'partials.hero', ['data' => $section], array_except(get_defined_vars(), array('__data', '__path'))); ?>

     
    <?php echo $__env->renderWhen($sectionName == 'textImg', 'partials.text-img', ['data' => $section], array_except(get_defined_vars(), array('__data', '__path'))); ?>

    
    <?php echo $__env->renderWhen($sectionName == 'products', 'partials.products', ['data' => $section], array_except(get_defined_vars(), array('__data', '__path'))); ?>

    
    <?php echo $__env->renderWhen($sectionName == 'contact', 'partials.contact', array_except(get_defined_vars(), array('__data', '__path'))); ?>

    
    <?php echo $__env->renderWhen($sectionName == 'partners', 'partials.partners', array_except(get_defined_vars(), array('__data', '__path'))); ?>

    
    <?php echo $__env->renderWhen($sectionName == 'blueBox', 'partials.blue-box', ['data' => $section], array_except(get_defined_vars(), array('__data', '__path'))); ?>
   
    
    <?php echo $__env->renderWhen($sectionName == 'opinie', 'partials.opinions', array_except(get_defined_vars(), array('__data', '__path'))); ?>
    
    
    <?php echo $__env->renderWhen($sectionName == 'breadcramps', 'partials.breadcramps', array_except(get_defined_vars(), array('__data', '__path'))); ?>
    
    
    <?php echo $__env->renderWhen($sectionName == 'team', 'partials.team', ['data' => $section], array_except(get_defined_vars(), array('__data', '__path'))); ?>
    
    
    <?php echo $__env->renderWhen($sectionName == 'content', 'partials.my-content', ['data' => $section], array_except(get_defined_vars(), array('__data', '__path'))); ?>


  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>