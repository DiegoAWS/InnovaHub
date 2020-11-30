<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use phpDocumentor\Reflection\Types\Collection;

class Slider extends Component
{

    /**
     * The slides objects type.
     *
     * @var Collection
     */
    public $slides;

    /**
     * Create a new component instance.
     *
     * @param $slides
     */
    public function __construct($slides)
    {
        $this->slides = $slides;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components.slider');
    }
}
