<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Dropdown extends Component
{
    public $toggle;
    public $dontCloseOnOutClick;
    public $name;
    public $button;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $toggle, string $name = null, bool $dontCloseOnOutClick = false, $button = null)
    {
        $this->toggle = $toggle;
        $this->dontCloseOnOutClick = $dontCloseOnOutClick;
        $this->name = $name;
        $this->button = $button;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dropdown');
    }
}
