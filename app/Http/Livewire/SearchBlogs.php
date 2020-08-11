<?php

namespace App\Http\Livewire;

use App\Blog;
use Illuminate\Support\Str;
use Livewire\Component;
use Wink\WinkPost;

class SearchBlogs extends Component
{
    public $results = [];

    public $query = '';

    public function search()
    {
        $this->results = [];

        if (!Str::length($this->query)) {
            $this->results = [];
        }

        $this->results = Blog::search($this->query)->get()->filter(function($result){
            return $result->published && $result->publish_date->lt(now());
        });
    }

    public function render()
    {
        return view('livewire.search-blogs');
    }
}
