  <!DOCTYPE html>
  <html lang="en">
  @include('includes.head')
  <body>
  @include('includes.nav')
  @include('includes.head')

  @yield('content')
  @yield('about-content')
  @yield('contact-content')
  @yield('post-content')
      @include('includes.footer')
      @include('includes.scripts')
  </body>
  </html>
