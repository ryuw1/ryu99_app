use Illuminate\Support\Facades\Route;
<!doctype html>
<html>
<head>
    <meta charset='utf-8' />
    <meta name="viewport" content="width=device-width, onotial-scale=1.0">
    <link href="{{ mix('/css/app.css')}}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}" async defer></script>
    @vite('resources/css/app.css')
    <style>
        body {
            padding-top: 30px;
            padding-left: 30px;
        }

    </style>
    {{ use Illuminate\View\Component; }}
     <!-- Scripts -->
      <script src="{{ asset('../js/app.js') }}" async defer></script>
        <title> {{ $title ?? 'つぶつぶアプリ'}}</title>
    </head>
    <body class="pg-glay-50">
    
           @include('components.mastas.form.test0717')
    </body>
</html>
