<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $username,$password;

    protected $rules = [
        'username' => 'required|string',
        'password' => 'required|string'
    ];
    public function clear()
    {
        $this->username = '';
        $this->password = '';
    }
    public function login()
    {
        $this->validate();
        if (Auth::attempt(['username' => $this->username, 'password' => $this->password])) {
            $this->redirect('/');
        }
        $this->clear();
    }
    public function render()
    {
        return view('livewire.login');
    }
}
