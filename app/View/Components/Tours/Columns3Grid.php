<?php

namespace App\View\Components\Tours;

use Illuminate\View\Component;

class Columns3Grid extends Component
{
    public $tours;
    public $max;
    public $centered;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($tours, $max = null, $centered = false)
    {
        $this->tours = $tours;
        $this->max = $max;
        $this->centered = $centered;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tours.columns-3-grid');
    }
}