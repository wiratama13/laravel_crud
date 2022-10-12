<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
   @include('includes.style')
  </head>
  <body>

    <section class="data-mahasiswa mt-4">
        <div class="container">
            <div class="row">
              @yield('content')
            </div>
    </section>

    @include('includes.script')
  </body>
</html>
