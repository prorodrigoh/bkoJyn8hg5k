<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class ReceiveEvent extends Component
{
    public $message;

    public function mount()
    {
        $this->message = 'No message received yet';
    }

    #[On('messageSent')]
    public function messageReceived($message)
    {
        $this->message = $message;
    }

    #[On('resetMessage')]
    public function resetMessage()
    {
        $this->message = 'No message received yet';
    }
    
    public function render()
    {
        return view('livewire.receive-event');
    }
}
