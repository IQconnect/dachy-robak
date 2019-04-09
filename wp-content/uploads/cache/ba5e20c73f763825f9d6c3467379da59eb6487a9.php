<?php $__env->startSection('content'); ?>
<?php
    $section = get_field('components', 188);
    $hero = $section[0];
?>


    <?php echo $__env->make('partials.hero', ['data'=>$hero], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('partials.breadcramps', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <section class="section">
        <div class="container">
            <div class="row">
                <?php if(!have_posts()): ?>
                <div class="alert alert-warning">
                    <?php echo e(__('Sorry, no results were found.', 'sage')); ?>

                </div>
                <?php echo get_search_form(false); ?>

                <?php endif; ?>
                <ul class="posts">
                    
                    <?php while(have_posts()): ?> <?php the_post() ?>
                    <li class="posts__list">
                        <?php echo $__env->make('components.post', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
    </section>
    <?php echo $__env->make('partials.partners', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <?php echo get_the_posts_navigation(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>