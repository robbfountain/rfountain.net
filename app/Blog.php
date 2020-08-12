<?php

namespace App;

use Laravel\Scout\Searchable;
use Wink\WinkPost;

class Blog extends WinkPost
{
    use Searchable;

    public function scopeGetRecent($query)
    {
        return $query->live()
            ->published()
            ->latest()
            ->take(5)
            ->get();
    }
}
