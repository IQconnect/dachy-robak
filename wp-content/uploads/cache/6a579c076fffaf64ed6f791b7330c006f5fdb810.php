<?php
    $links = $data['Linki'];
?>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12 section__content">
                <?php 
                    $color = true;
                ?>

                <ul class="blue-box">
                    <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php 
                        if($loop -> index % 2 != 0) $color = true;
                        else $color = false;
                    ?>
                    <?php if($link['link']['title']): ?>
                    <li class="blue-box__item <?php if($color): ?> blue-box__item--light <?php endif; ?><?php echo e($color); ?>">
                        <?php if($link['link']['url']): ?>
                        <a class="blue-box__elem subheader" href="<?php echo e($link['link']['url']); ?>">
                            <?php echo e($link['link']['title']); ?>

                        </a>
                        <?php else: ?>
                        <div class="blue-box__elem subheader">
                            <?php echo e($link['link']['title']); ?>

                        </div>
                        <?php endif; ?>
                    </li>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </div>
</section>

