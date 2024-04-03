<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    public $type;
    public string $msg;
    /**
     * Create a new component instance.
     */
    public function __construct(string $msg = '', string $type = 'success')
    {
        //
        $this->type = $type;
        $this->msg = $msg;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}