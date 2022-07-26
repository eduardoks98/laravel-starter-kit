<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SidebarItem extends Component
{

    public $route;
    public $name;
    public $icon;
    public $id;
    public $notification;
    public $method;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $route, string $name, string $icon, string $id = null, NotificationBadge $notification = null, string $method = null)
    {
        $this->route = $route;
        $this->name = $name;
        $this->icon = $icon;
        $this->id = $id;
        $this->notification = $notification;
        $this->method = $method;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sidebar-item');
    }
}
