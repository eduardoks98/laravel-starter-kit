<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NotificationBadge extends Component
{

    /**
     * The alert type.
     *
     * @var string
     */
    public $total;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(int $total)
    {
        $this->total = $total;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.notification-badge');
    }
}
