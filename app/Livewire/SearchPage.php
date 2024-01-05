<?php

namespace App\Livewire;

use App\Models\Signup;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;

class SearchPage extends Component
{
    #[Title('searches')]

    #[Validate('required|string|min:3|max:25')]
    public $user_name = '';

    #[Validate('required|max:25|email')]
    public $user_email = '';

    public function signup() {

        $this->validate();
        Signup::create(
            $this->only(['user_name', 'user_email'])
        );

        $this->reset();

        return redirect()->back()->with('success', 'Your information was successfully received, you will be emailed shortly');
    }
    public function render()
    {
        return view('livewire.search-page');
    }
}
