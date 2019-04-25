@php
    $gallery = $data['gallery'];
@endphp

<section class="section">
  <div class="section__wrapper row">
      @if($gallery)
      <ul class="gallery">
        @foreach ( $gallery as $elem)
        <li>
            <a href="{{ $elem['url'] }}" data-fancybox="gallery">
              {!! wp_get_attachment_image($elem['ID'], 'large') !!}
          </a>
        </li>
        @endforeach
      </ul>
      @endif
  </div>
</section>
