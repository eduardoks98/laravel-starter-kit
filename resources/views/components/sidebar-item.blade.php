@if (isset($method))
    <li class="nav-item admin__nav__item">
        <form action="{{ $route }}" method="{{ $method == 'GET' ? 'GET' : 'POST' }}">
            @csrf
            @if (!in_array($method, ['GET', 'POST']))
                @method($method)
            @endif
            <button class="nav-link admin__nav__link" type="submit">
                <div class="nav__icon">
                    <i class="{{ $icon }}"></i>
                </div>

                <div class="nav__label"> {{ $name }} </div>
            </button>
        </form>
    </li>
@else
    <li class="nav-item admin__nav__item">
        <a class="nav-link admin__nav__link" href="{{ $route }}" id="{{ $id }}">
            @if (isset($notification))
                {{ $notification }}
            @endif
            <div class="nav__icon">
                <i class="{{ $icon }}"></i>
            </div>
            <div class="nav__label"> {{ $name }} </div>

        </a>
    </li>
@endif
