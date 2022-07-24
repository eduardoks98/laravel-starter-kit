<nav class="navbar sidebar navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 py-lg-0 navbar-light bg-light border-end-lg" id="_sidebar_collapse">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler ms-n2" type="button" data-collapse-toggle="_navbar_collapse" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="sidebar__collapse py-lg-5 mb-lg-5 px-lg-6 me-0">
            <!-- Brand -->
            <div class="sidebar__brand">
                <a class="navbar-brand " href="#">
                    <img src="https://preview.webpixels.io/web/img/logos/clever-primary.svg" alt="...">
                </a>
            </div>
            <!-- Toggle sidebar -->
            <div class="collapse navbar-collapse sidebar__toggle" role="button" data-collapse-toggle="_sidebar_collapse">
                <i class="fa-solid fa-left-right"></i>
            </div>


        </div>

        <!-- User menu (mobile) -->
        <div class="navbar-user d-lg-none">
            <!-- Dropdown -->
            <div class="dropdown" data-dropdown-toggle="_user_dropdown">
                <!-- Toggle -->
                <a id="sidebarAvatar" role="button">
                    <div class="avatar rounded-circle text-white">
                        <img alt="..." src="{{ gravatar(auth()->user()->email) }}">
                        {{-- https://images.unsplash.com/photo-1579463148228-138296ac3b98?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80 --}}
                    </div>
                </a>
                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-right" id="_user_dropdown">
                    <div class="dropdown-item">
                        <span class="d-block text-sm text-muted mb-1">Bem vindo(a)</span>
                        <span class="d-block text-heading font-semibold">{{ auth()->user()->name }}</span>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>
        </div>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="_navbar_collapse">
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}" id="_home_link">
                        <div class="nav__icon">
                            <i class="fa-solid fa-house"></i>
                        </div>
                        <div class="nav__label"> Dashboard</div>
                    </a>
                </li>

            </ul>
            <!-- Divider -->
            <hr class="navbar-divider my-5 opacity-20">
            <!-- Navigation -->
            <ul class="navbar-nav mb-md-4">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <div class="nav__icon">
                            <i class="fa-solid fa-gear"></i>
                        </div>
                        <div class="nav__label"> Settings</div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <div class="nav__icon">
                            <i class="fa-solid fa-bell"></i>
                        </div>
                        <div class="nav__label"> Notifications </div>
                        <x-notification-badge :total=23 />
                    </a>
                </li>
            </ul>
            <!-- Push content down -->
            <div class="mt-auto"></div>
            <!-- User (md) -->
            <ul class="navbar-nav mb-5">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <div class="nav__icon">
                            <i class="fa-solid fa-user-gear"></i>
                        </div>
                        <div class="nav__label"> Account </div>
                    </a>
                </li>
                <li class="nav-item">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="nav-link" type="submit">
                            <div class="nav__icon">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            </div>

                            <div class="nav__label"> Logout </div>
                        </button>

                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
