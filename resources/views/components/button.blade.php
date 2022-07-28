<{{$type}} class="btn d-inline-flex btn-sm btn-{{$colorClass}} mx-1 gap-1 align-items-center"
        {{ isset($attributes) ? $attributes : '' }}>
    {{ $slot }}
</{{$type}}>
