<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/journal/bootstrap.min.css">
</head>
<body>
    
   <div class="container">
    @yield('header')
        <div class="row">
            <div class="col">
                @yield('content')
            </div>
        </div>
    </div>
    
</body>
</html>
