<?php

namespace App\Livewire;

use App\Models\Bird;
use Livewire\Component;
use Livewire\Attributes\Validate;

class BirdCountForm extends Component
{
    public function mount($birdCount)
    {
        $this->bird_count = $birdCount;
    }
    
    #[Validate('required|numeric')]
    public int $bird_count;
    #[Validate('required|string')]
    public string $notes;

    public function submit()
    {

        $this->validate();
        Bird::create($this->pull());
        $this->reset();

    }

    public function render()
    {
        return view('livewire.bird-count-form',[
            'entries' => Bird::all(),
        ]);
    }
}
