<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Breadcrumb extends Component
{
    public $page;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->page = collect(config('menu'))->map(function($item){
            if(request()->routeIs($item['route'])){
                return $title = $item['title'];
                // dd($title);
            }
            
            //  $title;
        })->implode('');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.breadcrumb');
    }
}
