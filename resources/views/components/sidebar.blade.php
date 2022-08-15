<nav class="navbar sidebar navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 py-lg-0 navbar-light bg-light border-end-lg" id="_sidebar_collapse">
    <div class="container-fluid">
        <!-- Toggler navbar -->
        <button class="navbar-toggler ms-n2" type="button" data-collapse-toggle="_navbar_collapse" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="sidebar__collapse py-lg-5 mb-lg-5 px-lg-6 me-0" data-collapse-toggle="_sidebar_collapse" role="button" trigger-hover>
            <!-- Brand -->
            <div class="sidebar__brand">
                <a class="navbar-brand" role="button">
                    <img src="{{ $logoSrc }}" alt="...">
                </a>
            </div>

            <!-- Toggle sidebar -->
            <div class="collapse navbar-collapse sidebar__toggle" role="button">
                <i class="fa-solid fa-left-right" triggered-hover></i>
            </div>
        </div>

        <!-- User menu (mobile) -->
        <div class="navbar-user d-lg-none">
            {{$mobileMenu}}
        </div>
        
        <!-- Collapse -->
        <div class="collapse navbar-collapse navbar__collapse__menu" id="_navbar_collapse">
            {{$slot}}
        </div>
    </div>
</nav>
