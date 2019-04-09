<?php
    $id = $member -> ID;
    $job = get_field('job', $id);
    $image = get_field('image', $id);
    $tel = get_field('tel', $id);
    $mail = get_field('mail', $id);
?>

<div class="avatar">
    <?php if($image): ?>
    <img class="avatar__image" src="<?php echo e($image['url']); ?>" alt="<?php echo e($member -> post_title); ?>">
    <?php else: ?>
    <img class="avatar__image" src="https://ui-avatars.com/api/?name=<?php echo e(str_replace(' ', '+', $member -> post_title)); ?>" alt="<?php echo e($member -> post_title); ?>">
    <?php endif; ?>
    <div class="avatar__wrapper">
        <h3 class="avatar__title subtitle">
            <?php echo e($member -> post_title); ?>

        </h3>
        <p class="avatar__content secondary-body">
            <?php echo e($job); ?>

        </p>
        <p class="avatar__content secondary-body">
            tel: <a class="secondary-body" href="tel:<?php echo e($tel); ?>"><?php echo e($tel); ?></a>
        </p>
        <p class="avatar__content secondary-body">
            <a class="secondary-body link" href="mailto:<?php echo e($mail); ?>"><?php echo e($mail); ?></a>
        </p>
    </div>
</div>