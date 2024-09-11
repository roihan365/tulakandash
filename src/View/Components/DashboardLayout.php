<?php

namespace Roihan365\Dashboard\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class DashboardLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('tulakandashboard::layouts.dashboard');
    }
}
