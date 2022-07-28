<x-dropdown :toggle="$table . '_filter'"
            :name="'Filtro'">
    <x-slot:button>
        <x-button>
            <x-slot:attributes>
                data-dropdown-toggle="{{ $table }}_filter_dropdown"
            </x-slot:attributes>
            <i class="fa-solid fa-filter"></i>
        </x-button>
    </x-slot:button>
    
    <x-dropdown-item :name="'Action'"
                     :route="'teste'" />
    <x-dropdown-item :name="'Another action'"
                     :route="'teste'" />
</x-dropdown>
