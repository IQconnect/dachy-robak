<?php 
  $hero = get_field('hero');
  $date = get_the_date('d/m/Y');
  $authors = get_field('author');
  $sidebar = get_field('show_sidebar');
  $image = get_field('sidebar_image');
?>


<?php echo $__env->make('partials.hero', ['data'=>$hero, 'date'=> $date], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('partials.breadcramps', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<section class="section">
  <div class="container">
    <div class="row single-post">
      <?php if($sidebar): ?>
      <div class="single-post__sidebar col-sm-4 col-xl-3">
        <?php if($authors): ?>
          <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="single-post__avatar <?php if( $loop -> last ): ?> single-post__avatar--last <?php endif; ?>">
            <?php echo $__env->make('components.avatar', ['member'=>$author], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        <?php if($image): ?>
          <img class="single-post__image" src="<?php echo e($image['url']); ?>" alt="<?php echo e($image['alt']); ?>">
        <?php endif; ?>
        <?php echo $__env->make('partials.taglist', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('partials.share', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      </div>
      <?php endif; ?>
      <div class="single-post__content <?php if(!$sidebar): ?> single-post__content--full col-12 <?php else: ?> col-sm-8 col-xl-8 offset-xl-1 <?php endif; ?>">
        <article>
          <div class="entry-content">
            <?php the_content() ?>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

<?php echo $__env->make('partials.partners', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>




