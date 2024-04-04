<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hehe</title>
    @vite('resources/js/app.js')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="{{ asset('node_modules/select2/dist/css/select2.min.css') }}" rel="stylesheet"/>
    <script src="{{ asset('node_modules/jquery/dist/jquery.min.js') }}"></script>

</head>
<body>
<div id="app">
    {{$slot}}
</div>
<script src="{{ asset('node_modules/select2/dist/js/select2.min.js') }}"></script>
</body>
</html>
