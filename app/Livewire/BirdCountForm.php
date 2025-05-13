<?php

namespace App\Livewire;

use App\Models\Bird;
use Livewire\Component;

class BirdCountForm extends Component
{
    public int $birdCount = 0;
    public string $notes = '';

    public function submit()
    {
        Bird::create([
            'bird_count' => $this->birdCount,
            'notes' => $this->notes,
        ]);

        $this->birdCount = 0;
        $this->notes = '';
    }

    public function render()
    {
        return view('livewire.bird-count-form');
    }
}
