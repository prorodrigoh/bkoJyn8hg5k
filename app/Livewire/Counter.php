<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public int $count = 0;
    public int $number = 0;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function resetCount()
    {
        $this->count = 0;
        $this->number = 0;
    }

    public function setCount(int $number)
    {
        $this->count = $number;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
 