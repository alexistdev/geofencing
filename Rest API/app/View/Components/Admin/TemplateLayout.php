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
    public $secondTag;
    public $aktifTag;


    public function __construct($title,$secondTag,$aktifTag)
    {
        $this->title = $title;
        $this->secondTag = $secondTag;
        $this->aktifTag = $aktifTag;
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
