<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\View\View;

class TripSearch extends Component
{
    public string $pickup = '';
    public string $return = '';
    public bool $searched = false;

    public function search(): void
    {
        $this->searched = false;
        $this->validate([
            'pickup' => ['required', 'date', 'after_or_equal:today'],
            'return' => ['required', 'date', 'after_or_equal:pickup'],
        ], [], ['pickup' => 'pick-up date', 'return' => 'return date']);
        $this->searched = true;
    }

    public function render(): View
    {
        return view('livewire.trip-search');
    }
}
