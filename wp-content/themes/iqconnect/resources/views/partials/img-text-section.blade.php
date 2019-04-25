@php 

    $image = $data['image'];

    if($data['movie'] != '') $movie = $data['movie'];

    $title = $data['title'];
    $content = $data['content'];
    $link = $data['button_link'];
    $labels = $data['labels'];

@endphp

<section class="section">
    <div class="section__wrapper section__wrapper--space row">
        <div class="section__col section__col--space col-12 col-md-4">

            <a class="section__image" data-fancybox href="{{ $movie or $image['url'] }}">
                {!! wp_get_attachment_image($image['id'], 'medium_large') !!}
                @include('svg.play')
            </a>

        </div>
        <div class="section__col section__col--space col-12 col-md-8">
            <article class="section__content section__content--space">

                <h2 class="section__title title">
                   {!! $title !!}
                </h2>

                <div class="section__text">
                    {!! $content !!}
                </div>

                @if($link)
                <a class="section__link button" href="{{ $link['url'] }}">
                    {{ $link['title'] }}
                </a>
                @endif

                @if ($labels)
                <ul class="section__list">
                @foreach ($labels as $item)
                    <li class="section__list-elem">
                        <span class="section__label headline">
                            {{ $item['content'] }}
                        </span>
                        <span class="text">
                            {!! $item['title'] !!}
                        </span>
                    </li>
                @endforeach
                </ul>
                @endif

            </article>
        </div>
    </div>
</section>