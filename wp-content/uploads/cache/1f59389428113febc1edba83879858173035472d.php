

<section class="slider">
    <?php if($baner): ?>
        <div class="container slider__baner baner">
            <div class="row baner__wrapper">
                <header class="col-12 baner__header">
                    <h1 class="title title--h1">
                        <?php echo e($baner['title']); ?>

                    </h1>
                </header>
                <article class="col-12 baner__content">
                    <p class="text text--major">
                        <?php echo e($baner['text']); ?>

                    </p>
                </article>
                <footer class="col-12 baner__footer">
                    <ul class="icon-list">
                        <li class="col-12 col-md-4 col-xl-3 icon-list__elem">
                            <div class="icon-list__icon icon">
                                <span class="fas fa-map-marker-alt"></span>
                            </div>
                            <div class="icon-list__content">
                                <h3 class="title title--h3 title--bold">
                                    Lokalizacja
                                </h3>
                                <p class="text">
                                    <?php echo e($baner['adres']); ?>

                                </p>
                            </div>
                        </li>
                        <li class="col-12 col-md-4 col-xl-3 icon-list__elem">
                            <div class="icon-list__icon icon">
                                <span class="fas fa-phone-volume"></span>
                            </div>
                            <div class="icon-list__content">
                                <h3 class="title title--h3 title--bold">
                                    Telefon
                                </h3>
                                <p class="text">
                                    <a href="tel:<?php echo str_replace(' ', '', $baner['telefon']); ?>">
                                        <?php echo e($baner['telefon']); ?>

                                    </a>
                                </p>
                            </div>
                        </li>
                        <li class="col-12 col-md-4 col-xl-3 icon-list__elem">
                            <div class="icon-list__icon icon">
                                <span class="far fa-envelope-open"></span>
                            </div>
                            <div class="icon-list__content">
                                <h3 class="title title--h3 title--bold">
                                    E-MAIL
                                </h3>
                                <p class="text">
                                    <a href="mailto:<?php echo e($baner['mail']); ?>">
                                        <?php echo e($baner['mail']); ?>

                                    </a>
                                </p>
                            </div>
                        </li>
                        <li class="col-xl-3 icon-list__elem icon-list__elem--label">
                            <div class="icon-list__content">
                                <h3 class="title title--h3 title--special">
                                    <?php echo e($baner['tytul-label']); ?>

                                </h3>
                                <p class="title title--special text--special-color title--h1">
                                    <?php echo e($baner['content-label']); ?>

                                </p>
                            </div>
                        </li>
                    </ul>
                </footer>
            </div>
        </div>
    <?php endif; ?>
    <div class="slider__carousel col-12"
    >
        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="slider__cell carousel-cell">
                <img  class="slider__img" src="<?php echo e($img['image']['url']); ?>" alt="<?php echo e($img['image']['alt']); ?>">
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>