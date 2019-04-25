@php 
  $hero = get_field('hero');
  $date = get_the_date('d/m/Y');
  $authors = get_field('author');
  $sidebar = get_field('show_sidebar');
  $image = get_field('sidebar_image');
@endphp

<section class="section">
  <div class="container">
    <div class="row single-post">
      <div class="single-post__content @if(!$sidebar) single-post__content--full col-12 @else col-sm-8 col-xl-8 offset-xl-1 @endif">
        <article>
          <div class="entry-content">
            @php the_content() @endphp
          </div>
        </article>
      </div>
    </div>
  </div>
</section>




