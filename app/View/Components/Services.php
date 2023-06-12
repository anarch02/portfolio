<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Services extends Component
{
    public $services=[
        [
            'name' => 'web',
            'icon'=>'bx bx-code',
            'color' => 'icon-box-pink'
        ],
        [
            'name' => 'e-commerce',
            'icon' => 'bx bx-basket',
            'color' => 'icon-box-cyan'
        ],
        [
            'name' => 'crm',
            'icon' => 'bx bx-window',
            'color' => 'icon-box-green'
        ],
        [
            'name' => 'cms',
            'icon' => 'bx bx-sitemap',
            'color' => 'icon-box-blue'
        ],
    ];
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.services');
    }
}
