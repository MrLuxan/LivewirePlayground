<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use App\Models\testMatt;

class Form extends Component
{
    protected $listeners = ['SubmitOne','SubmitTwo'];
    public $step = 0;

    public $rules1 = [
        'fname' => 'required|min:6',
        'lname' => 'required|min:6',
    ];     

    public $rules2 = [
        'userHeight' => 'digits_between:2,5',
        'userHeight' => 'numeric|min:2'];

    public function SubmitOne($validatorPassed)
    {
        if($validatorPassed)
        {
            $this->step = 1;
        }
    }

    public function SubmitTwo($test)
    {        
        //dd('SubmitTwo' , $test);
        $this->step = 2;
    }

    public function render()
    {
        return view('livewire.form');
    }
}