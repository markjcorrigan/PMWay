<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Dashboard extends Component
{
//    public $activeTab = 'overview';

    #[Layout('components.layouts.app')]
    public function render(): View
    {
        return view('livewire.dashboard');
    }

//    public function setActiveTab($tab)
//    {
//        $this->activeTab = $tab;
//    }

}
