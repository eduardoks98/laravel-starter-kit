 <!-- Dropdown -->
 <div class="dropdown">
     <!-- Toggle -->
     <button class="btn d-inline-flex btn-sm btn-primary mx-1" data-dropdown-toggle="{{ $toggle . '_dropdown' }}">{{ $name }}</button>
     <!-- Menu -->
     <div class="dropdown-menu dropdown-menu-right" id="{{ $toggle . '_dropdown' }}" @if (isset($dontCloseOnOutClick)) dont-close-on-leave @endif>
         {{ $slot }}
     </div>
 </div>
