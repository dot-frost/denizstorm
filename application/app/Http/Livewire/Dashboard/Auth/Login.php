<?php

namespace App\Http\Livewire\Dashboard\Auth;

use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public $remember = false;

    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'password' => 'required',
            'remember' => 'boolean',
        ];
    }
    public function render()
    {
        return view('dashboard.pages.login')->layout('dashboard.layouts.auth',['title'=>'Login']);
    }

    public function login()
    {
        $this->validate();

        if (auth()->attempt(['email' => $this->email, 'password' => $this->password])){
            $this->redirect(route('admin.index'));
        }

        $this->addError('email', 'ایمیل یا کلمه عبور اشتباه است.');
    }
}
