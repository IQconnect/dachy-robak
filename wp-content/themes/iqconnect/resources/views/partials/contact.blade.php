
@php
    $title = get_field('contact_title','options');
    $numbers = get_field('contact_numbers','options');
@endphp

<section class="section section--center">
    <div class="section__wrapper section__wrapper--space row">
        <div class="col-12 contact">
            <header class="contact__header">
                <h3 class="subheader">
                    {!! $title !!}  
                </h3>
            </header>
            @if($numbers)
            <ul class="contact__list">
                @foreach ( $numbers as $number )
                <li class="contact__elem">
                    <a href="tel:{{ phone_number($number['number']) }}" class="headline"> 
                        {!! $number['number'] !!}
                    </a>
                </li>
                @endforeach
            </ul>
            @endif
            <footer class="contact__header">
                <a href="mailto:dachy-robak@dachy-robak.pl" class="subheader">
                    dachy-robak@dachy-robak.pl  
                </a>
            </footer>
        </div>
    </div>
  </section>