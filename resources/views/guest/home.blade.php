@php
$faker = Faker\Factory::create();
@endphp
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token"
          content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch"
          href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito"
          rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}"
          rel="stylesheet">
    <link href="{{ asset('css/core.css') }}"
          rel="stylesheet">
    <link href="{{ asset('css/toastr.min.css') }}"
          rel="stylesheet">
    @hasSection('import')
        <link href="{{ asset('css/' . $__env->yieldContent('import') . '.css') }}"
              rel="stylesheet">
    @endif

</head>

<body>
    <x-loading-bar />

    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary px-0 py-3">
            <div class="container-xl max-w-screen-xl">
                <!-- Brand -->
                <a class="navbar-brand"
                   href="#">
                    <img src="#"
                         class="h-8"
                         alt="...">
                </a>
                <!-- Toggler navbar -->
                <button class="navbar-toggler ms-n2"
                        type="button"
                        data-collapse-toggle="_navbar_collapse"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Collapse -->
                <div class="collapse navbar-collapse navbar__collapse__menu guest__menu"
                     id="_navbar_collapse">
                    <!-- Nav -->
                    <ul class="navbar-nav mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link "
                               href="{{ route('home') }}">Página inicial</a>
                        </li>

                    </ul>
                    @guest
                        <!-- Right navigation -->
                        <div class="navbar-nav ms-lg-4">
                            <a class="nav-item nav-link"
                               href="{{ route('login') }}">Entrar</a>
                        </div>
                        <!-- Action -->
                        <div class="d-flex align-items-lg-center mt-3 mt-lg-0 mb-3">
                            <a href="{{ route('register') }}"
                               class="btn btn-sm btn-light w-full w-lg-auto">
                                Cadastre-se
                            </a>
                        </div>
                    @endguest
                    @auth
                        <!-- Action -->
                        <div class="d-flex align-items-lg-center mt-3 mt-lg-0">
                            <a href="{{ route('admin.dashboard') }}"
                               class="btn btn-sm btn-light w-full w-lg-auto navbar__collapse__button">
                                Painel administrativo
                            </a>
                        </div>
                        <!-- Right navigation -->
                        <div class="navbar-nav ms-lg-4">
                            <form action="{{ route('logout') }}"
                                  method="POST">
                                @csrf
                                <button type="submit"
                                        class="btn bg-transparent nav-item nav-link">Sair</button>
                            </form>

                        </div>
                    @endauth

                </div>
            </div>
        </nav>
        <div class="pt-16 pb-16 bg-primary">
            <div class="container-xl max-w-screen-xl">
                <div class="row justify-content-md-center">
                    <div class="col-md-10 col-xl-8 text-md-center">
                        <div class="text-center">
                            <h1 class="ls-tight font-bolder display-3 text-white  mb-10">
                                <div class="avatar rounded-circle w-24">
                                    <img alt="..."
                                         src="https://scontent.ffln13-1.fna.fbcdn.net/v/t39.30808-1/290576104_2314412875366034_4859708018463183135_n.jpg?stp=dst-jpg_s200x200&_nc_cat=106&ccb=1-7&_nc_sid=7206a8&_nc_ohc=mmVI2Q7KqR4AX-fRmau&_nc_ht=scontent.ffln13-1.fna&oh=00_AT8FqUiFiPCRbodGIanwnVdk9RlwhLFnVJBlsP4Y8X5DfQ&oe=62FDEC90">
                                </div>
                            </h1>
                            <p class="lead text-white text-opacity-75 mb-5 display-5 font-lg-regular">
                                Jociele dos Santos
                            </p>

                            <p class="lead text-white text-opacity-75   font-lg-bold">
                                Marketing Digital & Blog
                            </p>

                            <p class="lead text-muted mt-5">
                            <div class="avatar rounded-circle bg-secondary text-primary">
                                <i class="fa-brands fa-instagram  "></i>
                            </div>
                            <div class="avatar rounded-circle bg-secondary text-primary">
                                <i class="fa-brands fa-facebook-f"></i>
                            </div>
                            <div class="avatar rounded-circle bg-secondary text-primary">
                                <i class="fa-brands fa-youtube"></i>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-18 pb-12 bg-surface-secondary">
            <div class="container max-w-screen-xl">
                <div class="row mb-5 text-center">
                    <div class="col-12">
                        <!-- Surtitle -->
                        <h5 class="h5 mb-5 text-uppercase text-primary">
                            Sobre mim
                        </h5>

                        <!-- Text -->
                        <p class="lead text-muted mb-10 text-justify">
                            {{$faker->realText($maxNbChars = 1000, $indexSize = 3)}}
                        </p>
                    </div>

                </div>
                <div class="row mb-5">
                    <div class="col-12">
                        <!-- Surtitle -->
                        <h5 class="h5 mb-5 text-uppercase text-primary">
                            Últimos artigos
                        </h5>
                        <div class="row card-group">
                            <x-article-card />
                            <x-article-card />
                            <x-article-card />
                            <x-article-card />
                            <x-article-card />
                            <x-article-card />
                            <x-article-card />
                            <x-article-card />
                            <a href="#"
                               class="text-primary text-right shadow-none">
                                Ver mais artigos &nbsp;
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>


                    </div>

                </div>

            </div>
        </div>
    </div>



    <footer class="pt-10 bg-surface-dark">
        <div class="container max-w-screen-xl">

            <div class="row align-items-center justify-content-md-between pb-7">
                <div class="col-md-6">
                    <div class="copyright text-sm text-center text-md-start text-light">
                        &copy; 2022 - Presente <a href="#"
                           class="h6 text-light text-sm font-bold">Eduardo Steffens</a>. Todos os direitos reservados.
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0 mx-n3">
                        <li class="nav-item">
                            <a class="nav-link text-white text-opacity-75 text-white-hover"
                               href="#">
                                Políticas
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.map"></script>
        <!-- Fontaweasome -->
        <script src="https://kit.fontawesome.com/ac03b4bf83.js"></script>
        <!-- Editor.js -->
        <script
                src="https://cdn.jsdelivr.net/combine/npm/@editorjs/simple-image@1.4.1,npm/@editorjs/image@2.6.2,npm/@editorjs/embed@2.5.2,npm/@editorjs/editorjs@2.25.0,npm/@editorjs/header@2.6.2,npm/@editorjs/warning@1.2.0,npm/@editorjs/raw@2.3.1,npm/@editorjs/inline-code@1.3.1,npm/@editorjs/delimiter@1.2.0,npm/@editorjs/list@1.7.0,npm/@editorjs/link@2.4.1,npm/@editorjs/code@2.7.0,npm/@editorjs/marker@1.2.2,npm/@editorjs/quote@2.4.0">
        </script>
        <!-- Scripts -->
        <script src="{{ asset('js/toastr.min.js') }}"
                defer></script>
        <script src="{{ asset('js/app.js') }}"
                defer></script>
        <script src="{{ asset('js/core.js') }}"
                defer></script>
        @hasSection('import')
            <script src="{{ asset('js/' . $__env->yieldContent('import') . '.js') }}"
                    defer></script>
        @endif
        @hasSection('_form')
            <script src="{{ asset('js/' . $__env->yieldContent('_form') . '.js') }}"
                    defer></script>
        @endif
    </footer>
</body>

</html>
