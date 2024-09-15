<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Login extends Component
{
    #[Title('Login')]

    #[Layout('components.layouts.auth')]

    public $email;

    public $password;


    public function render()
    {
        return view('livewire.login');
    }

    public function login()
    {
        if (Auth::attempt([
            'email' => $this->email,
            'password' => $this->password
        ])) {
            return $this->redirect('/Dashboard', navigate: true);
        }

        return $this->redirect('/loginplaza', navigate: true);
    }
}
