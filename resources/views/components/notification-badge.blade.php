{{-- <span class="badge badge__collapse bg-soft-{{ $type }} text-{{ $type }} rounded-pill d-inline-flex align-items-center ms-auto">
    {{ $description }}
</span> --}}
<span class="badge bg-{{ $type }} badge-count badge-md border-2 border-current rounded-circle position-absolute  transform translate-y-n1/2 translate-x-1/2" trigger-animation>
    <small>
        {{ $description }}
    </small>
</span>
