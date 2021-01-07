<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield("page-title", "Comics | DC")</title>
        {{-- FAVICON --}}
        <link rel="icon" href="{{ asset('images/favicon.ico')}}">
        {{-- CSS --}}
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        {{-- GOOGLE FONT --}}
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        {{-- FONTAWESOME --}}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    </head>
    <body>
        {{-- HEADER --}}
        @include("partials.header")

        <main>
            {{-- MAIN --}}
            @yield("content")
        </main>

        {{-- FOOTER --}}
        @include("partials.footer")

        {{-- JAVASCRIPT --}}
        <script src="{{ asset('js/app.js')}}" charset="utf-8"></script>
    </body>
</html>
