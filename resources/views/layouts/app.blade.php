<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <section class="px-8 py-4">
            <header class="container mx-auto">
                <img src="/images/logo.png" alt="Tweety" width="140px">
            </header>
        </section>

        <section class="px-8">
            <main class="container mx-auto">
                <x-errors/>

                <div class="lg:flex lg:justify-between">
                    <div class="lg:w-32">
                        @include('tweets._sidebar-links')
                    </div>

                    <div class="lg:flex-1 lg:mx-10" style="max-width: 900px">
                        @yield('content')
                    </div>

                    <div class="lg:w-1/5 bg-blue-100 rounded-lg p-4">
                        @include('tweets._friends-list')
                    </div>
                </div>
            </main>
        </section>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script>
        $('div[role="alert"]').delay(2000).fadeOut(2000);
    </script>
</body>

</html>
