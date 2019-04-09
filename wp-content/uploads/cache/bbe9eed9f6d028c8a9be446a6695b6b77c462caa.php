<?php
    $image = $data['image']['url'];
?>

<section class="hero" style="background-image: url(<?php echo e($image); ?>);">
    <div class="container hero__content">
        <div class="row">
            <div class="col">
                <h1 class="headline">
                    <?php echo e(the_title()); ?>

                </h1>
            </div>
        </div>
    </div>
</section>