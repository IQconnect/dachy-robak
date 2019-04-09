<?php 
    $image = get_field('contact_image', 'options');
    $title = get_field('contact_title', 'options');
    $suptitle = get_field('contact_suptitle', 'options');
    $adres = get_field('adres','options');
    $phone = get_field('phone','options');
    $mail = get_field('mail','options'); 
    $NIP = get_field('nip','options'); 
    $REGON = get_field('regon','options'); 
?>

<section class="text-img">
    <div class="container-fluid">
        <div class="row text-img__wrapper">
            <div class="col-12 col-md-12 col-lg-6 text-img__map-wrapper">
                <?php echo do_shortcode('[google_map_easy id="1"]'); ?>

            </div>
            <div class="col-12 col-md-12 col-lg-6 text-img__content text-img__content--has-bg content-block">
                <img class="text-img__image text-img__image--bg" src="<?php echo e($image['url']); ?>" alt="<?php echo e($image['alt']); ?>">
                <h2 class="content-block__header heading title">
                    <?php echo e($title); ?>

                    <span class="heading subheader">
                        <?php echo e($suptitle); ?>

                    </span>
                </h2>
                <div class="content-block__content text body">
                    <?php if($adres): ?>
                    <p class="body">
                        <strong>
                            Adres:
                        </strong>
                        <br>
                        <?php echo e($adres); ?>

                    </p>
                    <?php endif; ?>
                        
                    <?php if($phone): ?>
                    <p class="body">
                        <strong>
                            Telefon:
                        </strong>
                        <br>
                        <a href="tel:<?php echo e(str_replace(' ', '', $phone)); ?>" class="text body">
                            <?php echo e($phone); ?>

                        </a>
                    </p>
                    <?php endif; ?>
                    
                    <?php if($mail): ?>
                    <p class="body">
                        <strong>
                            Mail:
                        </strong>
                        <br>
                        <a href="mailto:<?php echo e($mail); ?>" class="text body">
                            <?php echo e($mail); ?>

                        </a>
                    </p>
                    <?php endif; ?>

                    <?php if($NIP || $REGON): ?>
                    <p>
                        <strong>
                            Dane:
                        </strong>
                        <br>
                        <?php if($NIP): ?>
                        NIP: <?php echo e($NIP); ?>

                        <?php endif; ?>
                        <?php if($NIP): ?>
                        <br>
                        REGON: <?php echo e($REGON); ?>

                        <?php endif; ?>
                    </p>
                    <?php endif; ?>
                    
                </div>
            </div>
        </div>
    </div>
</section>