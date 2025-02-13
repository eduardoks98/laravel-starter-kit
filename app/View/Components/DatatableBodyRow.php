<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DatatableBodyRow extends Component {
    public $view;
    public $class;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $view, string $class = null) {
        $this->view = $view;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render() {
        return view('components.datatable-body-row', ['view' => $this->view]);
    }
}
