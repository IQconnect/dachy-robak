<section class="section section--contact">
    <div class="container">
        <div class="row">
            <div class="section__header">
                <?php echo $__env->renderWhen(true == true, 'partials.section-header', ['title' => $data['title'], 'content'=> $data['text']], array_except(get_defined_vars(), array('__data', '__path'))); ?>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
               <div class="contact">
                    <ul class="contact__content icon-list icon-list--card">
                        <li class="col-12 icon-list__elem">
                            <div class="icon-list__icon icon">
                                <span class="fas fa-map-marker-alt"></span>
                            </div>
                            <div class="icon-list__content">
                                <h3 class="title title--h3 title--bold">
                                    Lokalizacja
                                </h3>
                                <p class="text">
                                    <?php echo e($data['adres']); ?>

                                </p>
                            </div>
                        </li>
                        <li class="col-12 icon-list__elem">
                            <div class="icon-list__icon icon">
                                <span class="fas fa-phone-volume"></span>
                            </div>
                            <div class="icon-list__content">
                                <h3 class="title title--h3 title--bold">
                                    Telefon
                                </h3>
                                <p class="text">
                                    <a href="tel:<?php echo str_replace(' ', '', $data['telefon']); ?>">
                                        <?php echo e($data['telefon']); ?>

                                    </a>
                                </p>
                            </div>
                        </li>
                        <li class="col-12 icon-list__elem">
                            <div class="icon-list__icon icon">
                                <span class="far fa-envelope-open"></span>
                            </div>
                            <div class="icon-list__content">
                                <h3 class="title title--h3 title--bold">
                                    E-MAIL
                                </h3>
                                <p class="text">
                                    <a href="mailto:<?php echo e($data['mail']); ?>">
                                        <?php echo e($data['mail']); ?>

                                    </a>
                                </p>
                            </div>
                        </li>
                    </ul>
               </div>
            </div>
        </div>
    </div>
</section>