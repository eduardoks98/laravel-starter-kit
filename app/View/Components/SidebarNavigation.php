<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SidebarNavigation extends Component
{

    public $pushDown;
    public $classe;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(bool $pushDown = false, string $classe = null)
    {
        $this->pushDown = $pushDown; 
        $this->classe = $classe; 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sidebar-navigation');
    }
}
