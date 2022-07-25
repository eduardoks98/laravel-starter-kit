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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/core.css') }}" rel="stylesheet">
    <link href="{{ asset('css/' . $__env->yieldContent('import') . '.css') }}" rel="stylesheet">

</head>

<body>
    <x-loading-bar />

    <div id="app">
        <div class="d-flex flex-column flex-lg-row h-lg-full bg-gray-100">
            <!-- Vertical Navbar -->
            <x-sidebar />
            <!-- Main content -->
            <div class="main__container h-screen  flex-grow-1 overflow-y-lg-auto">
                <!-- Horizontal Header -->
                <x-header />
                <main class="py-10 bg-surface-secondary">
                    <!-- Container -->
                    @yield('content')
                </main>
            </div>
        </div>


    </div>

    <footer>
        <!-- Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.map"></script>
        <!-- Fontaweasome -->
        <script src="https://kit.fontawesome.com/ac03b4bf83.js"></script>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/core.js') }}" defer></script>
        <script src="{{ asset('js/' . $__env->yieldContent('import') . '.js') }}" defer></script>
    </footer>
</body>

</html>
