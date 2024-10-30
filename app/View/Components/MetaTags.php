<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MetaTags extends Component
{
    public $title;
    public $description;
    public $siteUrl;
    public $ogImage;
    public $keywords;
    public $author;

    public function __construct($title = 'Tristan Vegas', $description = '', $siteUrl = '', $ogImage = '', $keywords = '', $author = 'Tristan Vegas')
    {
        $this->title = $title;
        $this->description = $description;
        $this->siteUrl = $siteUrl;
        $this->ogImage = $ogImage;
        $this->keywords = $keywords;
        $this->author = $author;
    }

    public function render()
    {
        return view('components.meta-tags');
    }
}
