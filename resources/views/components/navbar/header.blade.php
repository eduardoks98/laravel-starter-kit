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
                      <x-dropdown.dropdown :name="'Ações'" :toggle="'_acoes'">
                          <x-dropdown.dropdown-item :name="'Teste'" :route="'teste'"  />
                      </x-dropdown.dropdown>
                  </div>
              </div>
          </div>
      </div>
  </header>
