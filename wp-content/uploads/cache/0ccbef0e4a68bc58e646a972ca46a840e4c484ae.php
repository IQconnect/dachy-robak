<?php
    $brands = get_categories(array(
        'parent' => 5,
        'order'   => 'ASC',
        'exclude' => array(1)
    ));
?>

<section class="section brands">
    <div class="container">
        <div class="row">
            <header class="col-12 section__header">
                <h2 class="headeding title">
                    WSPÓŁPRACA
                </h2>
            </header>
            <?php if($brands): ?>
            <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $name = $item -> name;
                $image = get_field('image', 'category_'.$item -> term_id );
                $link = get_field('link', 'category_'.$item -> term_id );
            ?>

            <div class="col-4 col-sm brands__item">
                <a href="<?php echo e($link); ?>" target="_blank">
                    <?php if($image): ?> 
                        <img src="<?php echo e($image['url']); ?>" alt="<?php echo e($name); ?>">
                    <?php else: ?>
                        <h3 class="brands__title"><?php echo e($name); ?></h3>
                    <?php endif; ?>
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?> 
            <?php endif; ?>
        </div>
    </div>
</section>