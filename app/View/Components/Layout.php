<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Layout extends Component
{
    public string $titlePage;
    public string $title;
    public string $userName;
    public string $date;
    public string $imgSrc;

    public function __construct(
        $titlePage,
        $title = "Dashboard",
        $userName = 'Biru',
        $date = '12 Maret 2025',
        $imgSrc = '/asset/Light logo.png'
    ) {
        $this->titlePage = $titlePage;
        $this->title = $title;
        $this->userName = $userName;
        $this->date = $date;
        $this->imgSrc = $imgSrc;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout');
    }
}
