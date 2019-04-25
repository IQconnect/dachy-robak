<article class="block">
    <a class="block__link" href="{{ $link }}">
        <header class="block__header">
            {!! wp_get_attachment_image($icon['ID'], 'full','', array( "class" => "block__icon" )) !!}
            <h3 class="subheader">
                {{ $title }}
            </h3>
        </header>
        <p class="block__content body">
            {{ $content }}
        </p>
        <div class="block__image">   
            {!! $image !!}
        </div>
    </a>
</article>
