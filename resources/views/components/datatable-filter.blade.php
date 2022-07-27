<x-dropdown :toggle="$table . '_filter'"
            :name="'Filtro'">
    <x-slot:button>
        <button class="btn d-inline-flex btn-sm btn-primary mx-1"
                data-dropdown-toggle="{{ $table }}_filter_dropdown">
            <i class="fa-solid fa-filter"></i>
        </button>
    </x-slot:button>
    
    <x-dropdown-item :name="'Action'"
                     :route="'teste'" />
    <x-dropdown-item :name="'Another action'"
                     :route="'teste'" />
</x-dropdown>
