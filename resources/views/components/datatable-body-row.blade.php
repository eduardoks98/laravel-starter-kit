<tr @if (isset($class)) class="{{ $class }}"  @endif>
    {{ $slot }}
    <x-datatable-body-column :class="'text-end'">
        <a href="#"
           class="btn btn-sm btn-neutral">View</a>
    </x-datatable-body-column>
</tr>
