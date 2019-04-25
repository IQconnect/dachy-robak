@php
    $title = get_field('partners_title', 'options');
    $partners = get_field('partners_images', 'options');
@endphp

<section class="section">
  <div class="section__wrapper section__wrapper--space row">
      @include('components.section-header' , ['title' => $title, 'link'=> get_permalink(14)])
      @if($partners)
      <ul class="brands">
        @foreach ( $partners as $elem)
        <li>
          @include('components.brand', ['data' => $elem])
        </li>
        @endforeach
      </ul> 
      @endif
  </div>
</section>
