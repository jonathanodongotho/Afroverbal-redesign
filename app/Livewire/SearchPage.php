<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class SearchPage extends Component
{
    #[Title('searches')]
    public function render()
    {
        return view('livewire.search-page');
    }
}
