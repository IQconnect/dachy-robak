<article class="post">
    <a class="post__wrapper" href="<?php echo e(get_permalink()); ?>">
        <div class="post__image-wrapper">
            <?php if(has_post_thumbnail()): ?> 
            <?php echo get_the_post_thumbnail('', 'medium', array('class'=> 'post__image')); ?>

            <?php else: ?>
            <img class="post__image" src="https://placeimg.com/640/480/nature" alt="">
            <?php endif; ?>
            <div class="post__hover">
                <span class="post__icon subtitle">
                    <?php echo $__env->make('svg.glasses', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    CZYTAJ WIĘCEJ
                </span>
            </div>
        </div>
        <div class="post__content">
            <header class="post__header">
                <h2 class="subheeader">
                    <?php echo e(the_title()); ?>

                </h2>
            </header>
            <p class="post__excerpt secondary-body">
                <?php echo e(esc_html(get_the_excerpt())); ?>[...]
            </p>
            <footer class="post__footer">
                <p class="post__date secondary-body">
                    <?php echo e(get_the_date('d/m/Y')); ?>

                </p>
            </footer>
        </div>
    </a>
</article>