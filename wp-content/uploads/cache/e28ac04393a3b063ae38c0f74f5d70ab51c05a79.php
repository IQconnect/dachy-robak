<?php
    $content = $data['content'];
    $title = $data['title'];
?>

<section class="section">
    <div class="container">
        <div class="row">
            <?php echo $__env->make('partials.section-header', ['title'=> $title], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="col-12 col-sm-8 offset-sm-2 section__content">
               <?php echo $content; ?>

            </div>
        </div>
    </div>
</section>