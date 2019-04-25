<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp style="overflow-x: hidden">
    <div class="preloader" preloader ></div>
    @php do_action('get_header') @endphp
    @include('partials.header')
    @include('partials.hero')
    @include('partials.background')
    <main class="wrapper" id="wrapper">
      <div class="container">
        <div class="wrapper__content col">
          @yield('content')

          {{-- Work Togather --}}
          @include('partials.partners')
        </div>
      </div>
    </main>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
