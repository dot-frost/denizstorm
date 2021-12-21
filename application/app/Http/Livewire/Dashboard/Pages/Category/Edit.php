<?php

namespace App\Http\Livewire\Dashboard\Pages\Category;

use App\Models\Category;
use Livewire\Component;

class Edit extends Component
{
    public Category $category;

    public function mount(Category $category){
        $this->category = $category;
    }

    protected function rules()
    {
        return [
            'category.name' => ['required',],
            'category.slug' => ['required', 'unique:categories,slug,'.$this->category->getOriginal('id')],
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
        return view('dashboard.pages.category.edit')
            ->layout('dashboard.layouts.main')
            ->layoutData([
                'title' => 'Edit Category',
            ]);
    }
}
