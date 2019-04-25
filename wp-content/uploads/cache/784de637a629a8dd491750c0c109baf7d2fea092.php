<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="hero__subtitle large-body bold">
                    <?php if(is_archive()): ?>
                    <?php echo get_field('subtitle', 8); ?>

                    <?php else: ?>
                    <?php echo get_field('subtitle'); ?>

                    <?php endif; ?>
                </h1>
                <p class="hero__title headline">
                    <?php if(is_archive()): ?>
                    <?php echo get_field('title', 8); ?>

                    <?php else: ?>
                    <?php echo get_field('title'); ?>

                    <?php endif; ?>
                </p>
            </div>
        </div>
    </div>
</section>