<!doctype html>
<html lang="en-US">
  @include('_partials.head')
  <body>
    @include('_partials.header')
    <main id="content">
      @yield('body')
    </main>
    @include('_partials.footer')
    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
  </body>
</html>
