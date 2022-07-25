<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DropdownItem extends Component
{
    protected $method;
    protected $id;
    protected $route;
    protected $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $route, string $name, int $id = null, string $method = null)
    {
        $this->method = $method;
        $this->id = $id;
        $this->route = $route;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dropdown.dropdown-item');
    }
}
