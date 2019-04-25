<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="hero__subtitle large-body bold">
                    @if(is_archive())
                    {!! get_field('subtitle', 8) !!}
                    @else
                    {!! get_field('subtitle') !!}
                    @endif
                </h1>
                <p class="hero__title headline">
                    @if(is_archive())
                    {!! get_field('title', 8) !!}
                    @else
                    {!! get_field('title') !!}
                    @endif
                </p>
            </div>
        </div>
    </div>
</section>