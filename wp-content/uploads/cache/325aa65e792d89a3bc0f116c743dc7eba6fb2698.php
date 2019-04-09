<section class="section">
    <div class="container">
        <div class="row">
            <div class="col"> 
                <?php while(have_posts()): ?> <?php the_post() ?>
                    <?php the_content() ?>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>

