<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use App\Models\testMatt;

class Form extends Component
{
    protected $listeners = ['SubmitOne','SubmitTwo'];

    public $test = "TEST!!";
    public $kTest = "mmm";


    public function mount()
    {
    }

    public function SubmitOne($test)
    {
        //dd('SubmitOne' , $test);

        $rules = [
            'fname' => 'required|min:6',
            'lname' => 'required|min:6',
        ];

        $validator = Validator::make($test, $rules);

        dd($validator->passes(), $validator->messages()->toArray());

    }

    public function SubmitTwo($test)
    {        
        dd('SubmitTwo' , $test);
    }

    public function render()
    {
        return view('livewire.form');
    }
}