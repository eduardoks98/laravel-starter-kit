  <!-- Header -->
  <header class="bg-surface-primary border-bottom">
      <div class="container-fluid">
          <div class="mb-npx">
              <div class="row py-6">
                  <div class="col d-flex justify-content-start ">
                      @hasSection('back')
                          <x-button :type="'a'">
                              <x-slot:attributes>
                                  href=@yield('back')
                              </x-slot:attributes>
                              <i class="fa-solid fa-caret-left"></i> Voltar
                          </x-button>
                      @endif

                  </div>
                  <div class="col d-flex justify-content-center">
                      <!-- Title -->
                      <h1 class="h2 mb-0 ls-tight">{{ $title }}</h1>
                  </div>
                  <!-- Actions -->
                  <div class="col d-flex justify-content-end">
                      {{ $slot }}
                  </div>
              </div>
          </div>
      </div>
  </header>
