<?php

namespace App\Http\Livewire;

use Livewire\Component;

class WeightInput extends Component
{
    public $weightType = "killo";

    public $weightkg = 0;


    public function updatingWeightType($value)
    {
        if($this->weightType == "killo" && $value === "stone")
        {
            $this->weightkg = $this->weightkg * 2.20462;
        }
        elseif($this->weightType == "stone" && $value === "killo")
        {
            $this->weightkg = $this->weightkg / 2.20462;
        }
    }


    public function render()
    {
        return view('livewire.weight-input');
    }
}
