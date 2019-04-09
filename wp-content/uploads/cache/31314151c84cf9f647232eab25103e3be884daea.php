<?php 
$site = $data['pozycja'];
$title = $data['title'];
$suptitle = $data['suptitle'];
$content = $data['content'];
$button_text = $data['button'];
$button_link = $data['button_link'];

$categories = get_categories(array(
    'parent' => 0,
    'order'   => 'ASC',
    'exclude' => array(1, 5)
  ));
?>

<section class="products <?php if($site == 'prawo'): ?> products--rev <?php endif; ?>">
<div class="container">
    <div class="row products__wrapper">
        <div class="col-12 col-md-12 col-lg-6 <?php if($site == 'prawo'): ?> offset-lg-2 products--rev <?php endif; ?> products__slider rotator">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php 
                    $cat_title = $cat -> name;
                    $description = $cat -> description;
                    $id_image = 'category_'. $cat -> term_id ;
                    $img = get_field('image', 'category_' . $cat -> term_id);
                    $index = $loop->iteration;
                    if($index < 10) {
                        $index  = '0'.$index; 
                    }
                ?>
                <div class="rotator__cell">
                    <?php if($img ): ?>
                    <img class="rotator__image" src="<?php echo e($img['url']); ?>" alt="<?php echo e($img ['alt']); ?>">
                    <?php endif; ?>
                    <article class="rotator__content" data-index="<?php echo e($index); ?>.">
                        <header class="rotator__header">
                            <h3 class="heading subheader">
                                <?php echo e($cat_title); ?>

                            </h3>
                        </header>
                        <p class="text secoundary-body">
                            <?php echo e($description); ?>

                        </p>
                    </article>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="col-12 col-md-12 col-lg-4  products__content content-block">
            <h2 class="content-block__header heading title">
              <?php echo e($title); ?>

              <span class="heading subheader">
                <?php echo e($suptitle); ?>

              </span>
            </h2>
            <div class="content-block__content text body">
              <?php echo $content; ?>

            </div>
            <?php if($button_text): ?>
            <a href="<?php echo e($button_link); ?>" class="button button--primary">
              <?php echo e($button_text); ?>

            </a>
            <?php endif; ?>
        </div>
    </div>
</div>
</section>