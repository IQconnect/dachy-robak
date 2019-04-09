<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-8">
        <p class="text text--special">
          <span class="footer__copy text--semi-bold">
            <?php echo e(get_theme_mod("copyright")); ?>

          </span>
          <br>
          Strona wykorzystuje pliki cookies dla lepszego działania. Korzystając ze strony godzisz się na to.
        </p>
      </div>
      <div class="col-12 col-sm-4 footer__by">
        <a href="http://iqconnect.pl/">
          <img class="footer__by-img" src="<?php echo e(get_theme_mod("by_logo")); ?>" alt="Projek i wykonanie IQ Connect">
        </a>
      </div>
    </div>
  </div>
</footer>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script>
  jQuery('.slider__carousel').flickity({
    prevNextButtons: false,
    pageDots: false,
    wrapAround: true,
    autoPlay: 2000 
  });
  jQuery(window).load(function() {
    jQuery('.slider__carousel').flickity("resize");
  });
</script>
