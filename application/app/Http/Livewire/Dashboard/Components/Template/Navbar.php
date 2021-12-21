<?php

namespace App\Http\Livewire\Dashboard\Components\Template;

use Livewire\Component;
use function view;

class Navbar extends Component
{

    public $user;

    protected $listeners = ['profileUpdated' => 'mount'];

    public function mount()
    {
        $this->user = auth()->user();
    }

    public function render()
    {
        return view('dashboard.components.template.navbar');
    }

    public function logout()
    {
        auth()->logout();
        $this->redirect(route('admin.index'));
    }
}
