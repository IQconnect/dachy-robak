<?php
    $title_certyficate = get_field('certyficate_title', 'options');    
    $gallery_certyficate = get_field('certyficate_images', 'options');
    $icon_certyficate = get_field('certyficate_icon', 'options');
    
    $title_refs = get_field('refs_title', 'options');    
    $gallery_refs = get_field('refs_images', 'options');    
    $icon_refs = get_field('refs_icon', 'options');
?>

<section class="section">
<div class="section__wrapper section__wrapper--space row">
        <ul class="section__col refs col-12">
            <li class="refs__item">
                <a class="refs__wrapper" href="<?php echo e($gallery_certyficate[0]['url']); ?>" data-fancybox="certyficate">
                    <img src="<?php echo e($icon_certyficate['url']); ?>" alt="">
                    <h2 class="refs__title headline">
                        <?php echo e($title_certyficate); ?>

                    </h2>
                </a>
                <ul hidden>
                    <?php $__currentLoopData = $gallery_certyficate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(!$loop -> first): ?>
                    <li>
                        <a class="refs__wrapper" href="<?php echo e($item['url']); ?>" data-fancybox="certyficate"></a>
                    </li>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </li>
            <li class="refs__item">
                <a class="refs__wrapper" href="<?php echo e($gallery_refs[0]['url']); ?>" data-fancybox="refs">
                    <img src="<?php echo e($icon_refs['url']); ?>" alt="">
                    <h2 class="refs__title headline">
                        <?php echo e($title_refs); ?>

                    </h2>
                </a>
                <ul hidden>
                    <?php $__currentLoopData = $gallery_refs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(!$loop -> first): ?>
                    <li>
                        <a class="refs__wrapper" href="<?php echo e($item['url']); ?>" data-fancybox="refs"></a>
                    </li>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </li>
            
        </ul>
    </div>
</section>