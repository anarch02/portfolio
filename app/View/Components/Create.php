<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Create extends Component
{
    public $info;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        // dump(config('create_modal'));
        $this->info = collect(config('create_modal'))->map(function ($item) {
            $item['active'] = request()->routeIs($item['route']);
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.create');
    }
}
