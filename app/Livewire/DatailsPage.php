<?php

namespace App\Livewire;

use App\Models\Proverb;
use App\Models\Signup;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;

class DatailsPage extends Component
{
    #[Title('details')]
    

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

    /* ------------get proverb--------------- */

    public $proverb;

    public function mount($slug)
    {
        $this->proverb = Proverb::where('slug', $slug)->firstOrFail();
    } 

    public function render()
    {

        $trendings = Proverb::select('proverb_text', 'created_at', 'context_id', 'slug')->offset(5)->limit(4)->get(); 

        $late = Proverb::select('proverb_text', 'created_at', 'author', 'slug')->limit(3)->get();

        return view('livewire.datails-page', [
            'trendings' => $trendings,
            'late' => $late
        ]);
    }
}
