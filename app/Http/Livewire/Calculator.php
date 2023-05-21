<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\testMatt;

class Calculator extends Component
{
    protected $listeners = ['SubmitOne','SubmitTwo'];


    public $number1 = 0;
    public $number2 = 0;
    public string $action = '+';
    public float $result = 0;
    public bool $disabled = false;
    
    public function calculate()
    {


        $num1 = (float)$this->number1;
        $num2 = (float)$this->number2;

        switch($this->action)
        {
            case '+': $this->result = $num1 + $num2; break;
            case '-': $this->result = $num1 - $num2; break;
            case '*': $this->result = $num1 * $num2; break;
            case '/': $this->result = $num1 / $num2; break;
            case '%': $this->result = $num1 % $num2; break;
        }
    }

    public function updated($property)
    {
        $this->disabled = $this->number1 == '' || $this->number2 == '';
    }

    public function render()
    {
        return view('livewire.calculator');
    }
}