<?php 
    $img = $data['url']; 
    $title = $data['alt'];
    $link = $data['caption'];
?>

<div class="brand">
    <a class="brand__link" href="<?php echo e($link); ?>">
        <img src="<?php echo e($img); ?>" alt="<?php echo e($title); ?>">
    </a>
</div>