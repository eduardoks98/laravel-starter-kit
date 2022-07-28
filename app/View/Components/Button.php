<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component {

    public $type;
    public $attributes;
    public $colorClass;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $type = 'button', string $colorClass = 'primary', $attributes = null) {
        $this->type = $type;
        $this->attributes = $attributes;
        $this->colorClass = $colorClass;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render() {
        return view('components.button');
    }
}
