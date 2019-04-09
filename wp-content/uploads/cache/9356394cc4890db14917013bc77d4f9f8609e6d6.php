<?php
    $title = get_field('opinions_title', 'options');

    $args = array(
    'posts_per_page'   => 999,
    'offset'           => 0,
    'orderby' => 'date',
    'order'    => 'ASC',
    'post_type'        => 'opinie',
    'post_status'      => 'publish',
    'suppress_filters' => true,
    );

    $opinions = get_posts( $args );
?>



<section class="section">
    <div class="container">
        <div class="row">
            <?php echo $__env->make('partials.section-header', ['title'=> $title], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="col-12 section__content">
                <ul class="opinions">
                    <?php $__currentLoopData = $opinions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opinion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="opinions__elem <?php if($loop -> index == 0): ?> -is-active <?php endif; ?>" opinion="<?php echo e($loop -> index); ?>">
                        
                        <?php echo get_the_post_thumbnail($opinion -> ID, 'full', ['class' => 'opinions__image']); ?>

                        <div class="opinions__content">
                            <p class="opinions__text large-body">
                                "<?php echo wp_strip_all_tags($opinion -> post_content); ?>"
                            </p>
                            <span class="opinions__name large-body">
                                <?php echo e($opinion -> post_title); ?>

                            </span>
                        </div>

                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <li class="opinions__nav">
                        <button class="opinions__button opinions__button--prev" opinion-button data-direction="prev">
                            <span class="fas fa-angle-left"></span>
                        </button>
                        <button class="opinions__button opinions__button--next" opinion-button data-direction="next">
                            <span class="fas fa-angle-right"></span>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>