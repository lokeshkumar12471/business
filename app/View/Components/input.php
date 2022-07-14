<?php

namespace App\View\Components;

use Illuminate\Http\Request;

use Illuminate\View\Component;

class input extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $type;
    public $name;
    public $label;
    public $value;
    public $placeholder;

    public function _mount($type, $label, $value, $placeholder, $name)
    {
        $this->type = $type;
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.backend.form.input');
    }
}