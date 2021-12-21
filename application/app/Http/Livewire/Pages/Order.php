<?php

namespace App\Http\Livewire\Pages;

use App\Models\Category;
use App\Models\Setting;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Order extends Component
{
    protected $listeners = [
        'selectDevice' => 'selectDevice',
    ];

    public int $current = 1;
    public $timeUpdated;

    public $contact = [
        'name' => null,
        'email' => null,
        'phone' => null,
        'description' => null,
    ];

    protected $rules = [
        'contact.name' => ['required'],
        'contact.email' => ['required','email'],
        'contact.phone' => ['required'],
        'contact.description' => ['required']
    ];

    protected $validationAttributes = [
        'contact.name' => 'نام و نام خانوادگی',
        'contact.email' => 'ایمیل',
        'contact.phone' => 'شماره تماس',
        'contact.description' => 'توصیفات کامپیوتر'
    ];

    public function save(){
        $this->validate();
        $order = \App\Models\Order::create([
            'name' => $this->contact['name'],
            'email' => $this->contact['email'],
            'phone' => $this->contact['phone'],
            'description' => $this->contact['description'],
            'devices' => $this->order->pluck('selected')
        ]);

        session()->put('factor' , $order->id);

        $this->redirect(route('client.factor'));
    }

    public Collection $categories;

    public \Illuminate\Support\Collection $order;

    public function next()
    {
        ++$this->current > $this->order->count() + 1 && $this->current = $this->order->count() + 1;
    }

    public function previous()
    {
        --$this->current < 1 && $this->current = 1;
    }

    public function nextStatus()
    {
        if ($this->current < $this->order->count() + 1 ){
            return $this->stepHasDevices($this->order[$this->current - 1]) && $this->order[$this->current - 1]['selected'] !== false;
        }
        return false;
    }

    public function stepHasDevices($step)
    {
        return $this->categories->find($step['category'])->devices->isNotEmpty() or !empty($step['devices']);
    }

    public function previousStatus()
    {
        return $this->current > 1;
    }

    public function getCurrentPosition()
    {
        return (100 / ($this->order->count() + 1)) * ($this->current - 1) * -1;
    }

    public function getProgressStatus()
    {
        return (100 / ($this->order->count() + 1)) * ($this->current);
    }

    public function selectDevice($category, $device)
    {
        $index = $this->order->search(fn($step) => $step['category'] == $category);
        $this->order = $this->order->replaceRecursive([$index => ['selected' => $device]]);

        if ($index < $this->order->count()) {
            for ($i = $index + 1; $i < $this->order->count(); $i++) {
                $this->order = $this->order->replaceRecursive([$i => ['selected' => false]]);
            }
        }

        if ($index < $this->order->count() - 1) {
            $nextStep = [];
            $nextStep['category'] = $this->categories->find($this->order[$index + 1]['category']);


            $allSelectedOnNextStepCategory = collect();
            for ($i = 0; $i <= $index; $i++) {
                $currentStep = $this->order[$i];

                $currentStepSelected = $this->categories->find($currentStep['category'])->devices->find($currentStep['selected']);

                $currentSupported = $currentStepSelected->supports()->where('category_id', $nextStep['category']->id)->get();

                $currentSupported->isNotEmpty() && $allSelectedOnNextStepCategory->push($currentSupported);
            }
            $selected = null;
            if ($allSelectedOnNextStepCategory->isNotEmpty()) {
                $selected = $allSelectedOnNextStepCategory->reduce(function ($carry, $current) {
                    return $carry->intersect($current);
                }, $allSelectedOnNextStepCategory[0]);

                $selected = $selected->pluck('id')->toArray();
            }
            $nextStep['category'] = $nextStep['category']['id'];
            $nextStep['devices'] = $selected;
            $this->order = $this->order->replaceRecursive([$index + 1 => $nextStep]);
        }
        $this->next();
        $this->timeUpdated = now();
    }

    public function mount()
    {
        $setting = Setting::where('name','order-form')->first();
        $this->categories = Category::whereIn('id' , $setting->value )->with('devices')->get();
        $this->order = collect();
        $setting->value->each(function ($category) {
            $category = $this->categories->find($category);
            $this->order->push([
                'category' => $category->id,
                'selected' => false,
                'devices' => null
            ]);
        });
        $this->timeUpdated = now();
    }

    public function getCategory($category)
    {
        if ($category instanceof Category) {
            return $category;
        }
        return $this->categories->find($category);
    }

    public function getDevices($category, $devices)
    {
        if (empty($devices ?: [])) return null;
        return $this->getCategory($category)->devices->whereIn('id', $devices);
    }

    public function render()
    {
        return view('pages.order')
            ->layout('layouts.base')
            ->layoutData([
                'title' => 'Order'
            ]);
    }
}
