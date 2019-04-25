@extends('layouts.app')

@section('content')

<section class="section">
    <div class="section__wrapper row">
        @if (!have_posts())
        <div class="alert alert-warning">
            {{ __('Sorry, no results were found.', 'sage') }}
        </div>
        {!! get_search_form(false) !!}
        @endif
        <ul class="section__col realization col-12">
            @while (have_posts()) @php the_post() @endphp

            @php
                $item = get_post(get_the_ID());
                $title = $item -> post_title;
                $subtitle = get_the_category($item -> ID)[0]->name;
                $content = $item -> post_excerpt;
                $image = get_the_post_thumbnail($item -> ID);
                $link = get_permalink($item -> ID);
                $icon = get_field('icon', $item -> ID);
            @endphp

            <li class="realization__item">
                @include('components.image-block', 
                [
                    'title'=>$title,
                    'subtitle'=>$subtitle,
                    'content'=>$content,
                    'image'=>$image,
                    'link'=>$link,
                    'icon'=>$icon,
                ])   
            </li>
            @endwhile
        </ul>
    </div>
</section>

@endsection
