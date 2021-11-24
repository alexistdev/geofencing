<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class TemplateLayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $title;
    public $menu;

    public function __construct($title,$menu)
    {
        $this->title = $title;
        $this->menu = $menu;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.template-layout');
    }
}
