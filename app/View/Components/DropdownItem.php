<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DropdownItem extends Component
{
    public $method;
    public $id;
    public $route;
    public $name;
    public $withDivider;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $name = null, string $route = null, int $id = null, string $method = null, $withDivider = null)
    {
        $this->method = $method;
        $this->id = $id;
        $this->route = $route;
        $this->name = $name;
        $this->withDivider = $withDivider;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dropdown-item');
    }
}
