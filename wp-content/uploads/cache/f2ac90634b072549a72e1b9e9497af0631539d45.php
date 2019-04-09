<section class="text-img <?php if($data['pozycja'] == 'prawo'): ?> text-img--rev <?php endif; ?>">
    <div class="container">
        <div class="row text-img__wrapper">
            <div class="col-12 col-md-6 text-img__image-wrapper">
                <img class="text-img__image" src="<?php echo e($data['image']['url']); ?>" alt="<?php echo e($data['image']['alt']); ?>">
            </div>
            <div class="col-12 col-md-6 text-img__content content-block">
                <h2 class="title title--h2 title--special title--special-dark-color content-block__header">
                    <?php echo e($data['title']); ?>

                </h2>
                <div class="content-block__content text">
                    <?php echo $data['content']; ?>

                </div>
            </div>
        </div>
    </div>
</section>