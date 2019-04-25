@php
    $title_certyficate = get_field('certyficate_title', 'options');    
    $gallery_certyficate = get_field('certyficate_images', 'options');
    $icon_certyficate = get_field('certyficate_icon', 'options');
    
    $title_refs = get_field('refs_title', 'options');    
    $gallery_refs = get_field('refs_images', 'options');    
    $icon_refs = get_field('refs_icon', 'options');
@endphp

<section class="section">
<div class="section__wrapper section__wrapper--space row">
        <ul class="section__col refs col-12">
            <li class="refs__item">
                <a class="refs__wrapper" href="{{ $gallery_certyficate[0]['url'] }}" data-fancybox="certyficate">
                    <img src="{{ $icon_certyficate['url'] }}" alt="">
                    <h2 class="refs__title headline">
                        {{ $title_certyficate }}
                    </h2>
                </a>
                <ul hidden>
                    @foreach ($gallery_certyficate as $item)
                    @if(!$loop -> first)
                    <li>
                        <a class="refs__wrapper" href="{{ $item['url'] }}" data-fancybox="certyficate"></a>
                    </li>
                    @endif
                    @endforeach
                </ul>
            </li>
            <li class="refs__item">
                <a class="refs__wrapper" href="{{ $gallery_refs[0]['url'] }}" data-fancybox="refs">
                    <img src="{{ $icon_refs['url'] }}" alt="">
                    <h2 class="refs__title headline">
                        {{ $title_refs }}
                    </h2>
                </a>
                <ul hidden>
                    @foreach ($gallery_refs as $item)
                    @if(!$loop -> first)
                    <li>
                        <a class="refs__wrapper" href="{{ $item['url'] }}" data-fancybox="refs"></a>
                    </li>
                    @endif
                    @endforeach
                </ul>
            </li>
            
        </ul>
    </div>
</section>