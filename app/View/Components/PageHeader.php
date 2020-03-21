<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PageHeader extends Component
{
    public $pageName;

    public function __construct($page)
    {
        $this->pageName = $page;
    }

    public function render()
    {
        return view('components.page-header');
    }
}
