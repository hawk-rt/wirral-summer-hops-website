<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
        @if($page->url)
            <script type="text/javascript">
                setTimeout(function(){ window.location.href= '{{ $page->url }}';}, 5000);
                let timeleft = 4;
                let downloadTimer = setInterval(function(){
                    if(timeleft <= 0){
                        clearInterval(downloadTimer);
                        document.getElementById("countdown").innerHTML = "0";
                    } else {
                        document.getElementById("countdown").innerHTML = timeleft;
                    }
                    timeleft -= 1;
                }, 1000);
            </script>
        @endif
    </head>
    <body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        @include('_partials.header')
        @yield('body')
        @include('_partials.footer')
    </main>
    </body>
</html>
