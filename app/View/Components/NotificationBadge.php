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
    public $description;
    public $type;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(mixed $description, string $type)
    {
        $this->description = $description;
        $this->type = $type;
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
