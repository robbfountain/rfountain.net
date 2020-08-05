<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BlogPost extends Component
{
    public $article;

    public $full;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($article, $full = false)
    {
        $this->article = $article;
        $this->full = $full;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.blog-post');
    }
}
