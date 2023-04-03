<?php

namespace App\View\Components\dashboard;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class clothing extends Component
{
    /**
     * Create a new component instance.
     */

    public $collection;
    public $category;

    public function __construct($collection,$category)
    {
        $this->collection=$collection;
        $this->category=$category;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.clothing');
    }
}
