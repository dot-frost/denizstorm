<?php

namespace App\Http\Livewire\Dashboard\Pages\Contact;

use App\Models\Contact;
use Livewire\Component;

class Index extends Component
{
    public $contacts;


    public $delete = false;

    public function mount(){
        $this->contacts = Contact::orderByDesc('created_at')->get();
    }

    public function setDelete($delete)
    {
        $this->delete = $delete;
    }

    public function delete()
    {
        $this->contacts->find($this->delete)->delete();
        $this->mount();
    }

    public function render()
    {
        return view('dashboard.pages.contact.index')
            ->layoutData([
                'title' => 'پیام ها'
            ]);
    }
}
