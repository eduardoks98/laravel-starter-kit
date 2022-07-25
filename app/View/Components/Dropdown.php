<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Dropdown extends Component
{
    protected $toggle;
    protected $dontCloseOnOutClick;
    protected $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $toggle, string $name, bool $dontCloseOnOutClick = false)
    {
        $this->toggle = $toggle;
        $this->dontCloseOnOutClick = $dontCloseOnOutClick;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dropdown.dropdown');
    }
}
