<?php
    $image = $data['image'];
    $title = $data['title'];
    $movie = $data['film'];
?>

<section class="hero">
    <div class="container hero__content">
        <div class="row">
            <div class="col">
                <h1 class="headline">
                    <?php if(is_post_type_archive( 'oferty_inwestycyjne' )): ?> 
                        <?php echo e(get_post_type_object(get_post_type())->label); ?>

                    <?php else: ?> 
                        <?php if(is_category()): ?> 
                        <?php echo e(single_cat_title()); ?>

                        <?php else: ?>
                            <?php if($title): ?>
                            <?php echo e($title); ?>

                            <?php else: ?>
                            <?php echo e(the_title()); ?>

                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                </h1>
                <?php if($date): ?>
                <p class="body">
                    <?php echo e($date); ?>

                </p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
    <?php if($movie): ?>
        <video class="hero__img" playsinline="" autoplay="" muted="" loop="" poster="<?php echo e($image['url']); ?>">
            <source src="<?php echo e($movie['url']); ?>" type="video/mp4">
        </video>
    <?php else: ?>
    <img  class="hero__img" src="<?php echo e($image['url']); ?>" a lt="<?php echo e($image['alt']); ?>">
    <?php endif; ?>
</section>