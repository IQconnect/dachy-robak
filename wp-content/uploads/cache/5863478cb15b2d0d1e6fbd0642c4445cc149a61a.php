<?php
    $args = array(
        'posts_per_page'   => 4,
        'offset'           => 0,
        'orderby' => 'date',
        'order'    => 'ASC',
        'post_type'        => 'oferty',
        'post_status'      => 'publish',
        'suppress_filters' => true,
    );

    $offer = get_posts( $args );
    $title = get_field('ofert_title', 'options');
    $link = get_post_type_archive_link( 'oferty' );
?>

<section class="section">
    <div class="section__wrapper section__wrapper--space row">
        <?php echo $__env->make('components.section-header' , ['title' => $title, 'link'=>$link], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <ul class="section__col section__col--space offer col-12 ">
            <?php if($offer): ?> 
                <?php $__currentLoopData = $offer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $title = $item -> post_title;
                        $content = $item -> post_excerpt;
                        $image = get_the_post_thumbnail($item -> ID);
                        $link = get_permalink($item -> ID);
                        $icon = get_field('icon', $item -> ID);
                    ?>
                <li>
                    <?php echo $__env->make('components.block', 
                    [
                        'title'=>$title,
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