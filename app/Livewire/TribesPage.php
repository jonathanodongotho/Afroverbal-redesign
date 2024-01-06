<?php

namespace App\Livewire;

use App\Models\Tribe;
use App\Models\Signup;
use App\Models\Context;
use App\Models\Proverb;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;

class TribesPage extends Component
{
    #[Title('sort by tribe')]

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

    /* -------using tribe name to get tribe id------- */

    public $tribe;

    public function getTribeId()
    {
        $tribe = Tribe::where('tribe_name', $this->tribe)->firstOrFail();

        return $tribe->id;
    }

    public function render()
    {
        $proverbs = Proverb::select('proverb_text', 'proverb_translation', 'context_id', 'tribe_id', 'created_at', 'author')
        ->where('tribe_id', $this->getTribeId())
        ->simplePaginate(5);

        $tribes = Tribe::all();

        $contexts = Context::all();

        $trendings = Proverb::select('proverb_text', 'created_at',)->offset(5)->limit(4)->get(); 

        $late = Proverb::select('proverb_text', 'created_at', 'author', 'slug')->limit(3)->get();

        return view('livewire.tribes-page', [
            'proverbs' => $proverbs,
            'tribes' => $tribes,
            'contexts' => $contexts,
            'trendings' => $trendings,
            'late' => $late
        ]);
    }
}

