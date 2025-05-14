<?php

namespace App\Livewire;

use Livewire\Component;

class SendEvent extends Component
{
    public $message;

    public function sendMessage()
    {
        $this->dispatch('messageSent', $this->message);
        $this->reset('message');
    }

    public function resetMessage()
    {
        $this->dispatch('resetMessage');
    }
    
    public function render()
    {
        return view('livewire.send-event');
    }
}
