<?php

namespace App\Http\Livewire;

use App\Blog;
use Illuminate\Support\Str;
use Livewire\Component;

class SearchBlogs extends Component
{
    /**
     * @var array
     */
    public $results = [];

    /**
     * @var string
     */
    public $query = '';

    /**
     * Perform the blog search
     */
    public function search()
    {
        $this->results = [];

        if (!Str::length($this->query)) {
            $this->results = [];
        }

        $this->results = Blog::search($this->query)->get()->filter(function ($result) {
            return $result->published && $result->publish_date->lt(now());
        });
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.search-blogs');
    }
}
