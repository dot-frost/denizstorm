<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Input extends Component
{
    public $value;

    public $error = null;
    public $message = null;

    public function dehydrateValue($value){
        $this->message = $value;
        if ($value === 'hello'){
            $this->message = 'Welcome';
        }
    }

    public function render()
    {
        return view('components.input');
    }
}
