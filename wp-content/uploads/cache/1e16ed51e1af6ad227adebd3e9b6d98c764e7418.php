<?php
    $team = $data['team'];
    $title = $data['title'];
?>

<section class="section section--light">
    <div class="container">
        <div class="row">
            <?php echo $__env->make('partials.section-header', ['title'=> $title], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="col-12 section__content">
                <?php if($team): ?>
                <ul class="team">
                    <?php $__currentLoopData = $team; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="team__elem">
                        <?php echo $__env->make('components.avatar', ['member'=>$member], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>