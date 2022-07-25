@if (isset($method))
    <form action="{{ $route }}" method="{{ $method == 'GET' ? 'GET' : 'POST' }}">
        @csrf
        @if (!in_array($method, ['GET', 'POST']))
            @method($method)
        @endif
        <button class="dropdown-item" @if (isset($id)) id="{{ $id }}" @else type="submit" @endif>{{ $name }}</button>
    </form>
@else
    <a class="dropdown-item" @if (isset($id)) id="{{ $id }}" data-action="{{ $route }}" @else  href="{{ $route }}" @endif>{{ $name }}</a>
@endif
