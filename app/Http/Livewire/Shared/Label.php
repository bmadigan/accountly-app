<?php

namespace App\Http\Livewire\Shared;

use Livewire\Component;

class Label extends Component
{
    public $label;

    public function mount($label)
    {
        $this->label = $label;
    }

    public function render()
    {
        return view('livewire.shared.label');
    }
}
