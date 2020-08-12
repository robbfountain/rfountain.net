<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavLink extends Component
{
    /**
     * @var
     */
    public $route;

    /**
     * @var bool|mixed
     */
    public $asPage = false;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route, $asPage = false)
    {
        $this->route = $route;
        $this->asPage = $asPage;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.nav-link');
    }
}
