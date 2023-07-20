<?php

namespace App\View\Components;

use App\Models\Exhibit;
use Illuminate\View\Component;

class LastExhibits extends Component
{

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $exhibits = Exhibit::orderByDesc('created_at')->limit(4)->get();

        return view('components.last-exhibits',['exhibits'=>$exhibits]);
    }
}
