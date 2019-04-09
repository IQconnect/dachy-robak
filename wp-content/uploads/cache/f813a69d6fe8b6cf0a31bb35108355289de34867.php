<?php
$posttags = get_the_tags();    
?>

<?php if($posttags): ?>
<ul class="taglist">
    <?php $__currentLoopData = $posttags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="taglist__item">
        <a href="<?php echo e(get_tag_link($tag-> term_id)); ?>" class="taglist__elem button button--tag">
            <?php echo e($tag -> name); ?>

        </a>
    </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php endif; ?>