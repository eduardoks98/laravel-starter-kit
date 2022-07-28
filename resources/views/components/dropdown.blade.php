 <!-- Dropdown -->
 <div class="dropdown">
     <!-- Toggle -->
     @if (isset($button))
         {{ $button }}
     @else
         <x-button>
             <x-slot:attributes>
                 data-dropdown-toggle="{{ $toggle }}_dropdown"
             </x-slot:attributes>
             {{ $name }}
             <i class="fa-solid fa-caret-down dropdown__arrow"></i>
         </x-button>
     @endif
     <!-- Menu -->
     <div class="dropdown-menu dropdown-menu-right"
          id="{{ $toggle }}_dropdown"
          @if ($dontCloseOnOutClick) dont-close-on-leave @endif>
         {{ $slot }}
     </div>
 </div>
