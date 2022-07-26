 <!-- Dropdown -->
 <div class="dropdown">
     <!-- Toggle -->
     @if (isset($button))
         {{ $button }}
     @else
         <button class="btn d-inline-flex btn-sm btn-primary mx-1" data-dropdown-toggle="{{ $toggle }}_dropdown">
             {{ $name }}
             <i class="fa-solid fa-caret-down dropdown__arrow"></i>
         </button>
     @endif
     <!-- Menu -->
     <div class="dropdown-menu dropdown-menu-right" id="{{ $toggle }}_dropdown" @if ($dontCloseOnOutClick) dont-close-on-leave @endif>
         {{ $slot }}
     </div>
 </div>
