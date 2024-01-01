<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class DatailsPage extends Component
{
    #[Title('details')]
    public function render()
    {
        return view('livewire.datails-page');
    }
}
