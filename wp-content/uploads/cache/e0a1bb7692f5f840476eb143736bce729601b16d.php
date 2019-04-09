<?php 
    $site = $data['pozycja'];
    $image = $data['image'];
    $title = $data['title'];
    $suptitle = $data['suptitle'];
    $content = $data['content'];
    $button_text = $data['button'];
    $button_link = $data['button_link'];
?>

<section class="text-img <?php if($site == 'prawo'): ?> text-img--rev <?php endif; ?>">
    <div class="container">
        <div class="row text-img__wrapper">
            <div class="col-12 col-md-12 col-lg-6 text-img__image-wrapper">
                <img class="text-img__image" src="<?php echo e($image['url']); ?>" alt="<?php echo e($image['alt']); ?>">
            </div>
            <div class="col-12 col-md-12 col-lg-6 text-img__content content-block">
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