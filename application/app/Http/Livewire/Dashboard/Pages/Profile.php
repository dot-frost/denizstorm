<?php

namespace App\Http\Livewire\Dashboard\Pages;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{
    use WithFileUploads;

    public User $user;

    public $password;
    public $password_confirmation;

    public $avatar;

    public function rules($section = 'profile')
    {
        if ($section == 'password') {
            return [
                'password' => 'required|confirmed'
            ];
        }

        return [
            'user.name' => 'required',
            'user.email' => 'required|email',
            'avatar' => 'nullable|image'
        ];
    }

    public function updateProfile()
    {
        $this->validate($this->rules(), null, [
            'avatar' => 'عکس پروفایل'
        ]);

        if ($this->avatar) {
            $this->user->avatar = $this->avatar->store('user', 'public');
        }

        $this->emit('profileUpdated');
        $this->user->save();
    }

    public function changePassword()
    {
        $this->validate($this->rules('password'));
        $this->user->password = \Hash::make($this->password);
        $this->user->save();
    }

    public function mount()
    {
        $this->user = auth()->user();
    }

    public function render()
    {
        return view('dashboard.pages.profile')
            ->layout('dashboard.layouts.main')
            ->layoutData([
                'title' => 'Dashboard Profile',
            ]);
    }
}
