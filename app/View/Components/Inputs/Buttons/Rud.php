<?php

namespace App\View\Components\Inputs\Buttons;

use Illuminate\View\Component;

class Rud extends Component
{
    public $id;
    public $route;
    public $softDelete;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route, $id, $softDelete = null)
    {
        $this->id = $id;
        $this->route = $route;
        $this->softDelete = $softDelete;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.inputs.buttons.rud');
    }
}
