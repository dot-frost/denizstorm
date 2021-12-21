<?php

namespace App\Http\Livewire\Components;

use Illuminate\Support\Collection;
use Livewire\Component;

class Slider extends Component
{
    public Collection $slides;

    public int $current = 1;

    public function mount(){

        $this->slides = collect([
            [
                'color' => 'red',
            ],
            [
                'color' => 'blue',
            ],
            [
                'color' => 'green',
            ],
            [
                'color' => 'brow',
            ],
            [
                'color' => 'yellow',
            ]
        ])->shuffle()->random(random_int(1,5));
    }

    public function next()
    {
        ++$this->current > $this->slides->count() && $this->current = $this->slides->count();

    }

    public function nextStatus(){
        return $this->current < $this->slides->count();
    }

    public function previousStatus(){
        return $this->current > 1;
    }

    public function previous()
    {
        --$this->current < 1 && $this->current = 1;
    }

    public function getCurrentPosition(){
        return (100 / $this->slides->count()) * ($this->current-1) * -1;
    }

    public function getProgressStatus(){
        return (100 / $this->slides->count()) * ($this->current);
    }

    public function render()
    {
        return view('components.slider')
            ->layout('layouts.base')
            ->layoutData(['title' => 'Slider']);
    }
}
