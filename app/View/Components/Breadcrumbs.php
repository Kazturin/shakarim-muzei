<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Breadcrumbs extends Component
{
  //  public $homeLink;
    public $links;
    /**
     * Create a new component instance.
     * @param  array  $homeLink
     * @param  array  $links
     * @return void
     */
    public function __construct($links)
    {
      //  $this->homeLink = $homeLink;
        $this->links = $links;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.breadcrumbs');
    }
}
