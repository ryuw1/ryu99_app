<!doctype html>
<html>
    <meta charset='utf-8' />
    <meta name="viewport" content="width=device-width, onotial-scale=1.0">
    <head>
      <title>マスタ管理</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg=="
          crossorigin="anonymous" />
          <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
          <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
          @vite('resources/css/app.css', 'resources/js/app.js')
                <!-- フラッシュメッセージScript -->
                <script>
                  @if (session('flash_message'))
                      $(function () {
                              toastr.success('{{ session('flash_message') }}');
                      });
                  @endif
                  $(function(){
                        $('.flash_message').fadeOut(500);
                    });
                    </script>
    </head>
      <body class="h-full">
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
          <!-- Card -->
            <div class="-m-3.5 overflow-x-auto">
          
                <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                  <!-- Header -->
                  <body class="antialiased">
          <!-- フラッシュメッセージ表示 -->
                @if (session('flash_message'))
                  <div class="row justify-content-center"> 
                   <span class="p-3 m-2 border rounded bg-success text-white text-center">
                      {{ session('flash_message') }}
                    </span>
                  </div>
                @endif
          </div>
          <!-- 読み込み部分--> 
            @yield('content')<br/>
       </body>
</html>