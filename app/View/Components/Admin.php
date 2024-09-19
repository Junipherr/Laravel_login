<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\View\View;

class Admin extends Component
{
    public function __construct()
    {
        //
    }

    public function render(): View|Closure|string
{
    return view('layouts.admin'); // Make sure this path is correct
}
}
