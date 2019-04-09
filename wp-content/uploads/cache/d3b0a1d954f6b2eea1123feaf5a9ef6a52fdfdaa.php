<?php
    $args = array(
        'posts_per_page'   => 999,
        'offset'           => 0,
        'orderby' => 'date',
        'order'    => 'ASC',
        'post_type'        => 'partnerzy',
        'post_status'      => 'publish',
        'suppress_filters' => true,
    );

    $partners = get_posts( $args );
?>

<?php if($partners): ?>
<section class="section section--special">
    <div class="container">
        <div class="row">
            <div class="col-12 section__wrapper">
                <div class="partners">
                <ul class="partners__wrapper" style="width: <?php echo e(4 * 2 * 300); ?>px">
                    <?php for($i = 0; $i < 2; $i++): ?>
                        <?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="partners__item">
                            <a class="partners__link" href="<?php echo e(get_permalink($partner -> ID)); ?>">
                                <?php echo get_the_post_thumbnail($partner -> ID, 'full', ['class' => 'partners__image']); ?>

                                <span class="partners__name">
                                    <?php echo e($partner -> post_title); ?>

                                </span>
                            </a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endfor; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>