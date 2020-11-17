<!doctype html>
<html lang="en-US">
  @include('_partials.head')
  <body class="flex flex-col justify-between min-h-screen leading-normal font-sans">
    @include('_partials.header')
    <main class="w-full flex-auto" role="main">
      <div class="container max-w-8xl mx-auto px-6 md:px-8 py-4">
        <div class="flex flex-col lg:flex-row">
          <div class="w-full lg:w-3/12">
            <nav id="js-nav-menu" role="navigation" class="nav-menu hidden lg:block">
              @include('_partials.nav', ['items' => $page->navigation])
            </nav>
          </div>
          <div id="content" class="content w-full lg:w-3/5 break-words pb-16 lg:pl-4">
            <article>
              @yield('content')
              @if ($page->getExtension() === 'md')
                <footer class="text-right">
                  <small>Last updated: {{ $page->lastModified() }}</small>
                </footer>
              @endif
            </article>
          </div>
        </div>
      </div>
    </main>
    @include('_partials.footer')
    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
  </body>
</html>
