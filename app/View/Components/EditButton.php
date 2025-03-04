<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class EditButton extends Component
{
    /**
     * Create a new component instance.
     */
    public string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    /**
    * Get the view / contents that represent the component.
    */
    public function render(): View|Closure|string
    {

        return view('components.edit-button');
    }

    
}