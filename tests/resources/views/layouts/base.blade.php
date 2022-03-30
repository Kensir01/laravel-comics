<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('pageTitle')</title>

    <link rel='stylesheet' href="{{asset('css/app.css')}}">
    
    @yield('cssAggiuntivi')

</head>
<body style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">

    @include('partials.header')
    @include('partials.jumbotron')

    <main>
        @yield('content')
    </main>
    
    @include('partials.footer')

</body>
</html>

