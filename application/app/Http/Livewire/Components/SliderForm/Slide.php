<?php

namespace App\Http\Livewire\Components\SliderForm;

use App\Models\Category;
use Livewire\Component;

class Slide extends Component
{

    public Category $category;
    public $devices;
    public $step;
    public $selected;

    public function getDevices(){
        $stepDevices = $this->category->devices;
        if (!$this->devices){
            return $stepDevices;
        }
        return $stepDevices->intersect($this->devices);
    }

    public function render()
    {
        return view('components.slider-form.slide');
    }
}
