<?php 

    $image = $data['image'];

    if($data['movie'] != '') $movie = $data['movie'];

    $title = $data['title'];
    $content = $data['content'];
    $link = $data['button_link'];
    $labels = $data['labels'];

?>

<section class="section">
    <div class="section__wrapper section__wrapper--space row">
        <div class="section__col section__col--space col-12 col-md-4">

            <a class="section__image" data-fancybox href="<?php echo e(isset($movie) ? $movie : $image['url']); ?>">
                <?php echo wp_get_attachment_image($image['id'], 'medium_large'); ?>

                <?php echo $__env->make('svg.play', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </a>

        </div>
        <div class="section__col section__col--space col-12 col-md-8">
            <article class="section__content section__content--space">

                <h2 class="section__title title">
                   <?php echo $title; ?>

                </h2>

                <div class="section__text">
                    <?php echo $content; ?>

                </div>

                <?php if($link): ?>
                <a class="section__link button" href="<?php echo e($link['url']); ?>">
                    <?php echo e($link['title']); ?>

                </a>
                <?php endif; ?>

                <?php if($labels): ?>
                <ul class="section__list">
                <?php $__currentLoopData = $labels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="section__list-elem">
                        <span class="section__label headline">
                            <?php echo e($item['content']); ?>

                        </span>
                        <span class="text">
                            <?php echo $item['title']; ?>

                        </span>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>

            </article>
        </div>
    </div>
</section>