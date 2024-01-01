<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class AllProverbs extends Component
{

    #[Title('proverbs')]

    public function render()
    {
        return view('livewire.all-proverbs');
    }
}
