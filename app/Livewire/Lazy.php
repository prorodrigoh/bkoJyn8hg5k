<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class Lazy extends Component
{
    public $message;

    public function mount()
    {
        sleep(3);
    }

    public function placeholder()
    {
        return <<<'HTML'
        <div>Loading...</div>
        HTML;
    }

    #[On('messageSent')]
    public function messageReceived()
    {
       $this->message = 'Message received at ' . now();
    }

    #[On('resetMessage')]
    public function resetMessage()
    {
        $this->message = null;
    }

    public function render()
    {
        return view('livewire.lazy');
    }
}
