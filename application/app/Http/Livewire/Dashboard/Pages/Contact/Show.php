<?php

namespace App\Http\Livewire\Dashboard\Pages\Contact;

use App\Models\Contact;
use Livewire\Component;

class Show extends Component
{
    public Contact $contact;

    public function mount(Contact $contact){
        $this->contact = $contact;
    }

    public function render()
    {
        return view('dashboard.pages.contact.show')
            ->layoutData([
                'title' => 'پیام'
            ]);
    }
}
