<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class FancyForm extends Component
{
    public $submitFunc;
    public $rules;

    public function submit($formData)
    {
        $validator = Validator::make($formData, $this->rules);
        $validator->validate();
        $this->emitUp($this->submitFunc,$validator->passes());
    }

    public function render()
    {
        return view('livewire.fancy-form');
    }
}
