<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Datatable extends Component {
    public $heads;
    public $bodys;
    public $total;
    public $id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(int $total, string $id, $heads = null,  $bodys = null) {
        $this->total = $total;
        $this->heads = $heads;
        $this->bodys = $bodys;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render() {
        return view('components.datatable');
    }
}
