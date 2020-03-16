 @include ("partials._header")

 <div class="container">
  <header>
    @yield("header")
  </header>
  <body>
    @yield("body")
  </body>
  <footer>
    @yield("footer")
  </footer>
</div>

@include ("partials._footer")
