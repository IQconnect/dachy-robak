{{-- Contact --}}
@include('partials.contact')

@php
    $title = get_field('footer_title', 'options');
    $address = get_field('footer_address', 'options');
    $links = get_field('footer_links', 'options');
    $mails = get_field('footer_mails', 'options');
    $tels = get_field('footer_tel', 'options');
    $krs = get_field('footer_krs', 'options');
    $nip = get_field('footer_nip', 'options');
    $regon = get_field('footer_regon', 'options');
@endphp

<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="footer__wrapper col">
        <p class="footer__copy body">© Copyright 2019  - dachy-robak.pl</p>
        <a href="http://iqconnect.pl/">
          <img src="@asset('images/logo.png')" alt="strony internetowe iqconnect.pl" class="footer__made-by">
        </a>
      </div>
    </div>
  </div>
</footer>