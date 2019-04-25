<?php $__env->startSection('content'); ?>

<section class="section">
    <div class="section__wrapper row">
        <?php if(!have_posts()): ?>
        <div class="alert alert-warning">
            <?php echo e(__('Sorry, no results were found.', 'sage')); ?>

        </div>
        <?php echo get_search_form(false); ?>

        <?php endif; ?>
        <ul class="section__col realization col-12">
            <?php while(have_posts()): ?> <?php the_post() ?>

            <?php
                $item = get_post(get_the_ID());
                $title = $item -> post_title;
                $subtitle = get_the_category($item -> ID)[0]->name;
                $content = $item -> post_excerpt;
                $image = get_the_post_thumbnail($item -> ID);
                $link = get_permalink($item -> ID);
                $icon = get_field('icon', $item -> ID);
            ?>

            <li class="realization__item">
                <?php echo $__env->make('components.image-block', 
                [
                    'title'=>$title,
                    'subtitle'=>$subtitle,
                    'content'=>$content,
                    'image'=>$image,
                    'link'=>$link,
                    'icon'=>$icon,
                ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>   
            </li>
            <?php endwhile; ?>
        </ul>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>