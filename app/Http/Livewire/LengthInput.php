<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LengthInput extends Component
{
    public $lengthType = "meter";
    public $length = 0;

    public function updatingLengthType($value)
    {
        if($this->lengthType == "meter" && $value === "feet")
        {
            $this->length = $this->length * 3.2808399;
        }
        elseif($this->lengthType == "feet" && $value === "meter")
        {
            $this->length = $this->length / 3.2808399;
        }
    }


    public function render()
    {
        return view('livewire.length-input');
    }
}
