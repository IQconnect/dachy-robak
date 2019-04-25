@php
    $args = array(
        'posts_per_page'   => 4,
        'offset'           => 0,
        'orderby' => 'date',
        'order'    => 'ASC',
        'post_type'        => 'oferty',
        'post_status'      => 'publish',
        'suppress_filters' => true,
    );

    $offer = get_posts( $args );
    $title = get_field('ofert_title', 'options');
    $link = get_post_type_archive_link( 'oferty' );
@endphp

<section class="section">
    <div class="section__wrapper section__wrapper--space row">
        @include('components.section-header' , ['title' => $title, 'link'=>$link])
        <ul class="section__col section__col--space offer col-12 ">
            @if($offer) 
                @foreach ($offer as $item)
                    @php
                        $title = $item -> post_title;
                        $content = $item -> post_excerpt;
                        $image = get_the_post_thumbnail($item -> ID);
                        $link = get_permalink($item -> ID);
                        $icon = get_field('icon', $item -> ID);
                    @endphp
                <li>
                    @include('components.block', 
                    [
                        'title'=>$title,
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