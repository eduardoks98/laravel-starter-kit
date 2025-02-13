@if (isset($withDivider))
    <div class="dropdown-divider">
    </div>
@endif
@if (isset($method))
    <form action="{{ isset($route) ? $route : null }}"
          method="{{ $method == 'GET' ? 'GET' : 'POST' }}">
        @csrf
        @if (!in_array($method, ['GET', 'POST']))
            @method($method)
        @endif
        <button class="dropdown-item"
                @if (isset($id)) id="{{ $id }}" @else type="submit" @endif>

            {{ $name }}
        </button>
    </form>
@else
    <a class="dropdown-item"
       @if (isset($id)) id="{{ $id }}" data-action="{{ isset($route) ? $route : null }}" @else  href="{{ isset($route) ? $route : '#' }}" @endif>
        {{ $name }}
    </a>
@endif
