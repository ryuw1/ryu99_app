<!doctype html>
<html>
<head>
    <meta charset='utf-8' />
    <meta name="viewport" content="width=device-width, onotial-scale=1.0">
    @vite('resources/css/app.css')
    <style>
        body {
            padding-top: 30px;
            padding-left: 30px;
        }

    </style>
     <!-- Scripts -->
      <script src="{{ asset('../js/app.js') }}" async defer></script>
</head>
<body>
    @include('components.mastas.form.placeCreateUpdate')
</body>
</html>
