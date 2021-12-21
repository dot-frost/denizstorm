<?php

namespace App\Http\Livewire\Dashboard\Pages\Category;

use App\Models\Category;
use Livewire\Component;

class Create extends Component
{
    public Category $category;

    public function mount(){
        $this->category = new Category();
    }

    protected function rules()
    {
        return [
            'category.name' => ['required',],
            'category.slug' => ['required', 'unique:categories,slug'],
        ];
    }

    protected function validationAttributes(){
        return [
            'category.name' => 'نام',
            'category.slug' => 'اسلاگ'
        ];
    }

    public function create()
    {
        $this->validate();
        $this->category->save();
        $this->redirectRoute('admin.categories.index');
    }

    public function render()
    {
        return view('dashboard.pages.category.create')
            ->layout('dashboard.layouts.main')
            ->layoutData([
                'title' => 'Create Category',
            ]);
    }
}
