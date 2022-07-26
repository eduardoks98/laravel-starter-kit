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
            <x-sidebar :toggle="'_sidebar'" :logoSrc="'https://preview.webpixels.io/web/img/logos/clever-primary.svg'">

                <!--Header mobile menu -->
                <x-slot:mobileMenu>
                    <x-dropdown :toggle="'_user'">
                        <x-slot:button>
                            <a id="sidebarAvatar" role="button" data-dropdown-toggle="_user_dropdown" trigger-hover>
                                <div class="avatar rounded-circle text-white">
                                    <img alt="..." src="{{ gravatar(auth()->user()->email) }}" triggered-hover>
                                </div>
                            </a>
                        </x-slot:button>
                        <x-dropdown-item>
                            <x-slot:name>
                                <span class="d-block text-sm text-muted mb-1">Bem vindo(a)</span>
                                <span class="d-block text-heading font-semibold">{{ auth()->user()->name }}</span>
                            </x-slot:name>
                        </x-dropdown-item>
                        <x-dropdown-item :name="'Sair'" :route="route('logout')" :method="'POST'" :withDivider=true />
                    </x-dropdown>
                </x-slot:mobileMenu>
                <!-- Menu Items-->

                <x-sidebar-navigation>
                    <!-- Dashaboard -->
                    <x-sidebar-item :route="route('home')" :name="'Dashboard'" :icon="'fa-solid fa-house'" :id="'_dashboard_link'" />

                     <!-- Users -->
                     <x-sidebar-item :route="route('users')" :name="'Usuários'" :icon="'fa-solid fa-users'" :id="'_usuarios_link'">
                        {{-- <x-slot:notification>
                            <x-notification-badge :description=99 :type="'danger'" />
                        </x-slot:notification> --}}
                    </x-sidebar-item>
                </x-sidebar-navigation>

                <!-- Divider -->
                <hr class="navbar-divider my-2 opacity-20">

                <!-- Sair -->
                <x-sidebar-navigation :pushDown=true :classe="'mb-5'">
                    <x-sidebar-item :route="route('logout')" :name="'Sair'" :icon="'fa-solid fa-arrow-right-from-bracket'" :method="'POST'" />
                </x-sidebar-navigation>
            </x-sidebar>
            <!-- Main content -->
            <div class="main__container h-screen  flex-grow-1 overflow-y-lg-auto">
                <!-- Horizontal Header -->
                <x-header :title="$__env->yieldContent('title')">
                    @yield('actions')
                  
                </x-header>
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