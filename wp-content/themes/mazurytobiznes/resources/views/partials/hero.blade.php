@php
    $image = $data['image'];
    $title = $data['title'];
    $movie = $data['film'];
@endphp

<section class="hero">
    <div class="container hero__content">
        <div class="row">
            <div class="col">
                <h1 class="headline">
                    @if(is_post_type_archive( 'oferty_inwestycyjne' )) 
                        {{ get_post_type_object(get_post_type())->label }}
                    @else 
                        @if(is_category()) 
                        {{ single_cat_title() }}
                        @else
                            @if ($title)
                            {{ $title }}
                            @else
                            {{ the_title() }}
                            @endif
                        @endif
                    @endif
                </h1>
                @if($date)
                <p class="body">
                    {{ $date }}
                </p>
                @endif
            </div>
        </div>
    </div>
    
    @if ($movie)
        <video class="hero__img" playsinline="" autoplay="" muted="" loop="" poster="{{ $image['url'] }}">
            <source src="{{ $movie['url'] }}" type="video/mp4">
        </video>
    @else
    <img  class="hero__img" src="{{ $image['url'] }}" a lt="{{ $image['alt'] }}">
    @endif
</section>