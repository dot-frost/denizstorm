<?php

namespace App\Http\Livewire\Dashboard\Pages\Category;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $categories;

    public $delete = false;


    public function mount()
    {
        $this->categories = Category::orderByDesc('created_at')->get();
    }

    public function setDelete($delete)
    {
        $this->delete = $delete;
    }

    public function delete()
    {
        $this->categories->find($this->delete)->delete();
        $this->mount();
    }

    public function render()
    {
        return view('dashboard.pages.category.index',)
            ->layout('dashboard.layouts.main', [
                'title' => 'Categories'
            ]);
    }
}
