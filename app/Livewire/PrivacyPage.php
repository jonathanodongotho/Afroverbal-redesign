<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class PrivacyPage extends Component
{

    #[Title('privacy policy')]
    public function render()
    {
        return view('livewire.privacy-page');
    }
}
