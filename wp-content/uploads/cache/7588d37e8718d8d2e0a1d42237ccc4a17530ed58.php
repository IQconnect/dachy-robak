<?php
    $color = $data['color'];
    $image = $data['image']['url'];
?>

<section class="hero hero--<?php echo e($color); ?>" style="background-image: url(<?php echo e($image); ?>);">
    <div class="container hero__content">
        <div class="row">
            <div class="col">
                <h1 class="title title--h1 title--bold">
                    <?php echo e(the_title()); ?>

                </h1>
            </div>
        </div>
    </div>
</section>