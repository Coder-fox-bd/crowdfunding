<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Fundrising;

class TrendingFundriser extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $fundrisings = Fundrising::with('media', 'user')->limit(10)->get();
        return view('components.trending-fundriser',[
            'fundrisings' => $fundrisings,
        ]);
    }
}
