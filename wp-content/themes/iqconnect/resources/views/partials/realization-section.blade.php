@php
    $args = array(
        'posts_per_page'   => 4,
        'offset'           => 0,
        'orderby' => 'date',
        'order'    => 'DSC',
        'post_type'        => 'realizations',
        'post_status'      => 'publish',
        'suppress_filters' => true,
    );

    $realization = get_posts( $args );
    $title = get_field('realization_title', 'options');
    $link = get_post_type_archive_link( 'oferty' );
@endphp

<section class="section">
    <div class="section__wrapper section__wrapper--space row">
        @include('components.section-header' , ['title' => $title, 'link'=>$link])
    </div>
    <div class="section__wrapper row">
        <ul class="section__col realization col-12 ">
            @if($realization) 
                @foreach ($realization as $item)
                    @php
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
                @endforeach
            @endif
        </ul>
    </div>
</section>