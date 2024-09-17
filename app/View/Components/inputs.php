<?php

namespace App\View\Components;

use Illuminate\View\Component;

class inputs extends Component
{
    public $type;
    public $name;
    public $id;
    public $value;
    public $placeholder;
    public $class;

    public function __construct($type = 'text', $name, $id = null, $value = null, $placeholder = null, $class = 'form-control')
    {
        $this->type = $type;
        $this->name = $name;
        $this->id = $id ?? $name;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->class = $class;
    }

    public function render()
    {
        return view('components.inputs');
    }
}
