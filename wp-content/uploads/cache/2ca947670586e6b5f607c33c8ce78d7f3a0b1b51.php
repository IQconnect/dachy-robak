<article class="block">
    <a class="block__link" href="<?php echo e($link); ?>">
        <header class="block__header">
            <?php echo wp_get_attachment_image($icon['ID'], 'full','', array( "class" => "block__icon" )); ?>

            <h3 class="subheader">
                <?php echo e($title); ?>

            </h3>
        </header>
        <p class="block__content body">
            <?php echo e($content); ?>

        </p>
        <div class="block__image">   
            <?php echo $image; ?>

        </div>
    </a>
</article>
