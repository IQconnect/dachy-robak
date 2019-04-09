<?php 
  $hero = get_field('hero');
?>


<?php echo $__env->make('partials.hero', ['data'=>$hero], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('partials.breadcramps', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<section class="section">
  <div class="container">
    <div class="row page-content">
      <div class="single-post__content col-12">
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




