<!doctype html>
<html>
    <meta charset='utf-8' />
    <meta name="viewport" content="width=device-width, onotial-scale=1.0">
    <head>
      <title> マスタ</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg=="
          crossorigin="anonymous" />
          <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
          @vite('resources/css/app.css', 'resources/js/app.js')
  </head>
    <style>
        body {
            padding-top: 30px;
            padding-left: 30px;
        }
    </style>
    </head>
    {{ Breadcrumbs::render('about2') }}
      <body class="h-full">
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
          <!-- Card -->
            <div class="-m-3.5 overflow-x-auto">
          
                <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                  <!-- Header -->
                  <body class="antialiased">
                    <div class="flort-left">  
                    <h2 class="text-xl font-semibold text-gray-800">
                        寺院マスタ
                      </h2>
                    </div>   

            @yield('content')
       </body>
</html>
