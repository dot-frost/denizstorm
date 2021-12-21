<?php

namespace App\Http\Livewire\Dashboard\Pages\Settings;

use App\Models\Category;
use App\Models\Setting;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class OrderForm extends Component
{
    public Collection $categories;
    public Setting $setting;

    public \Illuminate\Support\Collection $slides;

    protected $rules = [
        'slides.*' => ['required','distinct']
    ];

    protected $validationAttributes = [
        'slides.*' => 'دسته'
    ];

    public function mount(){
        $this->categories = Category::all();
        $this->setting = Setting::firstOrCreate(
            ['name' => 'order-form'],
            ['value' => []]
        );
        $this->slides = $this->setting->value;
    }

    public function getCategoriesForSlide($slide){
        $excepts = $this->slides->except($slide);
        return $this->categories->whereNotIn('id' , $excepts);
    }

    public function add(){
        $this->slides->push(null);
    }
    public function remove($slide){
        $this->slides = $this->slides->except($slide);
    }

    public function save(){
        $this->validate();
        $this->setting->value = $this->slides;
        $this->setting->save();
    }

    public function render()
    {
        return view('dashboard.pages.settings.order-form')
            ->layoutData(['title' => "Order Form Setting"]);
    }
}
