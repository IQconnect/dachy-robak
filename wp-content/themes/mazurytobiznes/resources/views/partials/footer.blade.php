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
      <div class="col-12 col-sm-3">
        <a class="footer__brand header__brand" href="{{ home_url('/') }}">
          <img src="{{  get_field('logo', 'options')['url'] }}" alt="Jartech">
        </a>
      </div>
      <div class="col-12 col-sm-3 footer__wrapper">
        <p class="footer__title subheader">
          {{ $title  }}
        </p>
        <p class="footer__text secondary-body">
            {{ $address  }}
        </p>
        @if ($links)
        <ul class="footer__link-list">
          @foreach ($links as $link)
          <li class="footer__link-item">
            <a class="footer__link-item link secondary-body" href="{{ $link['link']['url'] }}">
              {{ $link['link']['title'] }}
            </a>
          </li>
          @endforeach
        </ul>
        @endif
      </div>
      <div class="col-12 col-sm-3 footer__wrapper">
        <address class="footer__info secondary-body">
          
          @if ($tels)
            <span class="footer__info-label">
              Tel:
            </span>
          <ul class="footer__info-list">
            @foreach ($tels as $tel)
            <li>
              <a class="secondary-body footer__info-content" href="tel:{{ str_replace(' ', '', $tel['tel']) }}">
                {{ $tel['tel'] }}
              </a>
            </li>
            @endforeach
          </ul>
          @endif
          @if ($mails)
          <span class="footer__info-label">
            E-mail:
          </span>
          <ul class="footer__info-list">
            @foreach ($mails as $mail)
            <li>
              <a class="link secondary-body" href="mailto:{{ $mail['mail'] }}">
                {{ $mail['mail'] }}
              </a>
            </li>
            @endforeach
          </ul>
          @endif
        </address>    
      </div>
      <div class="col-12 col-sm-3 footer__wrapper">
          <address class="footer__info secondary-body">
            <span class="footer__info-label">
              KRS:
            </span>
            <span class="footer__info-content">
              {{ $krs }}
            </span>
            <span class="footer__info-label">
              NIP:
            </span>
            <span class="footer__info-content">
              {{ $nip }}
            </span>
            <span class="footer__info-label">
              REGON:
            </span>
            <span class="footer__info-content">
              {{ $regon }}
            </span>
          </address>    
        </div>
    </div>
    <div class="col-12">
      <img class="footer__baner" src="@asset('images/eu-1.jpg')" alt="UE">
    </div>
  </div>
  <div class="footer__made-wrapper container-fluid">
    <div class="row">
      <div class="col-12">
        <a href="http://iqconnect.pl">
          <img src="@asset('images/logo.png')" alt="strony internetowe iqconnect.pl" class="footer__made-by">
        </a>
      </div>
    </div>
  </div>
</footer>

<script>
  $(function() {
      $('#form').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
          type: 'post',
          url: 'http://mazurytobiznes.pl/mail.php',
          data: $('form').serialize(),
          success: function () {
            alert('Wiadomość została wysłana!');
          }
        });
      });
  });
</script>