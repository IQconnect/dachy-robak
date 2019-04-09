<?php
    // print_r($data);
    $gallery = $data['gallery'];
?>

<section class="section section--gallery">
    <div class="container">
        <div class="row">
            <div class="section__header">
                <?php echo $__env->renderWhen(true == true, 'partials.section-header', ['title' => $data['title'], 'content'=> $data['text']], array_except(get_defined_vars(), array('__data', '__path'))); ?>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
               <div class="gallery">
                   <?php
                    $galleryName = rand(1, 999);    
                   ?>
                   <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a 
                        data-fancybox="gallery<?php echo e($galleryName); ?>" 
                        href="<?php echo e($img['url']); ?>"
                    >
                        <img class="gallery__image" src="<?php echo e($img['sizes']['medium']); ?>">
                    </a>   
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </div>
            </div>
        </div>
    </div>
</section>