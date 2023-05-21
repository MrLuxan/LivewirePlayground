<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FancyForm extends Component
{
    public $submitFunc;

    public function submit($formData)
    {
        $eemi = $this->emitUp($this->submitFunc,$formData);
    }

    public function render()
    {
        return view('livewire.fancy-form');
    }
}
