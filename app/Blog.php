<?php

namespace App;

use Laravel\Scout\Searchable;
use Wink\WinkPost;

class Blog extends WinkPost
{
    use Searchable;
}
