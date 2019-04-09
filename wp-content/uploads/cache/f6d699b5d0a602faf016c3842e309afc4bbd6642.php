<?php 
    $silder = $data['slider'];
?>

<section class="slider">
    <div class="slider__carousel col-12"> 
        <?php $__currentLoopData = $silder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="slider__cell carousel-cell">
            <div class="slider__baner">
                <div class="slider__content">
                    <header class="slider__header">
                        <?php if($lopp->first): ?>
                        <h1 class="heading headline">
                            <?php echo e($img['title']); ?>

                            <span class="heading title">
                                <?php echo e($img['suptitle']); ?>

                            </span>
                        </h1> 
                        <?php else: ?>
                        <h2 class="heading headline">
                            <?php echo e($img['title']); ?>

                            <span class="heading title">
                                <?php echo e($img['suptitle']); ?>

                            </span>
                        </h2> 
                        <?php endif; ?>
                    </header>
                    <p class="body">
                        <?php echo e($img['content']); ?>

                    </p>
                </div>
            </div>
            <img  class="slider__img" src="<?php echo e($img['image']['url']); ?>" a lt="<?php echo e($img['image']['alt']); ?>">
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>