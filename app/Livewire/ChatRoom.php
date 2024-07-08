<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Chat;
use Illuminate\Support\Facades\Auth;

class ChatRoom extends Component
{
    public $text;
    protected $rules = [
        'text' => 'required|string'
    ];
    public function clear()
    {
        $this->text = '';
    }
    public function sendChat()
    {
        $this->validate();
        Chat::create([
            'user_id' => Auth::user()->id,
            'text' => $this->text
        ]);
        $this->clear();
    }
    public function render()
    {
        // $chats = Chat::latest()->paginate(5);
        $chats = Chat::all();
        if (!Auth::check()) {
            $this->redirect('/login');
        }
        return view('livewire.chat-room', compact('chats'));
    }
}
