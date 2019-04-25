<?php
    $args = array(
        'posts_per_page'   => 4,
        'offset'           => 0,
        'orderby' => 'date',
        'order'    => 'DSC',
        'post_type'        => 'realizations',
        'post_status'      => 'publish',
        'suppress_filters' => true,
    );

    $realization = get_posts( $args );
    $title = get_field('realization_title', 'options');
    $link = get_post_type_archive_link( 'oferty' );
?>

<section class="section">
    <div class="section__wrapper section__wrapper--space row">
        <?php echo $__env->make('components.section-header' , ['title' => $title, 'link'=>$link], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <div class="section__wrapper row">
        <ul class="section__col realization col-12 ">
            <?php if($realization): ?> 
                <?php $__currentLoopData = $realization; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $title = $item -> post_title;
                        $subtitle = get_the_category($item -> ID)[0]->name;
                        $content = $item -> post_excerpt;
                        $image = get_the_post_thumbnail($item -> ID);
                        $link = get_permalink($item -> ID);
                        $icon = get_field('icon', $item -> ID);
                    ?>

                    <li class="realization__item">
                    <?php echo $__env->make('components.image-block', 
                    [
                        'title'=>$title,
                        'subtitle'=>$subtitle,
                        'content'=>$content,
                        'image'=>$image,
                        'link'=>$link,
                        'icon'=>$icon,
                    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>   
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </ul>
    </div>
</section>