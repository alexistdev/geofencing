<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class datatableJs extends Component
{
    public $menu;
    public function __construct($menu)
    {
       $this->menu = $menu;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.datatable-js');
    }
}
