  <!-- Header -->
  <header class="bg-surface-primary border-bottom">
      <div class="container-fluid">
          <div class="mb-npx">
              <div class="row py-6">
                  <div class="col">
                      <!-- Title -->
                      <h1 class="h2 mb-0 ls-tight">Application</h1>
                  </div>
                  <!-- Actions -->
                  <div class="col d-flex justify-content-end">
                      <!-- Dropdown -->
                      <div class="dropdown" data-dropdown-toggle="_acoes_dropdown">
                          <!-- Toggle -->
                          <button class="btn d-inline-flex btn-sm btn-primary mx-1">Ações</button>
                          <!-- Menu -->
                          <div class="dropdown-menu dropdown-menu-right" id="_acoes_dropdown">
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
              </div>
              {{-- <!-- Nav -->
        <ul class="nav nav-tabs  overflow-x border-0">
          <li class="nav-item ">
            <a href="#" class="nav-link active">All files</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link font-regular">Shared</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link font-regular">File requests</a>
          </li>
        </ul> --}}
          </div>
      </div>
  </header>
