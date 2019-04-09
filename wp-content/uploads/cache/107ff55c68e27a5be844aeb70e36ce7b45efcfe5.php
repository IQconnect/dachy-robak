<?php
    $icons = $data['icons'];
    $colNum = $data['ilosc'];
    $iconsLength =  count($icons);
    $split_for = $iconsLength / $colNum;
    $icons_split = array_chunk($icons, $split_for);
?>

<section class="section section--icon-info">
    <?php if($data['header'] == 'tak'): ?>
        <div class="container">
            <div class="row">
                <div class="section__header">
                    <?php echo $__env->make('partials.section-header', ['title' => $data['title'], 'content'=> $data['text']], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="icon-info icon-info--<?php echo e($data['background-type']); ?>"
     style="background-image: url(<?php echo e($data['background']['url']); ?>);"
     >
        <div class="container">
            <div class="row">
                <?php
                    $index = 0;
                ?>
                <?php $__currentLoopData = $icons_split; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <div class="col icon-info__wrapper">
                        <?php
                            $index++;
                        ?>
    
                        <ul class="icon-info__list">
                           
                            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           
                            <li class="icon-info__elem <?php if(!$item['list']): ?>icon-info__elem--no-list <?php endif; ?>">
                                <div class="icon-info__icon icon icon--big">
                                    
                                    <?php if($item['ikonka']): ?>
                                        <img src="<?php echo e($item['ikonka']['url']); ?>" alt="<?php echo e($item['ikonka']['alt']); ?>">
                                    <?php else: ?>
                                        <span class="<?php echo e($item['fa']); ?>"></span>
                                    <?php endif; ?>
                                </div>
                                <div class="icon-info__content">
                                    <h3 class="text text--major title--special title--semi-bold">
                                        <?php echo e($item['title']); ?>

                                    </h3>
                                    <?php if($item['list']): ?>
                                        <ul class="icon-info__sub-list">
                                            <?php $__currentLoopData = $item['list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="icon-info__sub-list-elem text">
                                                <?php echo e($list_item['title']); ?>

                                            </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php if($index == 5): ?>
                        <div class="col icon-info__wrapper d-block d-md-block d-xl-none"></div>
                    <?php endif; ?>
            </div>
        </div>
    </div>
</section>
