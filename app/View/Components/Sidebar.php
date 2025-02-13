<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Sidebar extends Component
{
    public $toggle;
    public $logoSrc;
    public $mobileMenu;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $toggle, string $logoSrc, $mobileMenu = null)
    {
       $this->toggle = $toggle;
       $this->logoSrc = $logoSrc;
       $this->mobileMenu = $mobileMenu;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sidebar');
    }
}
