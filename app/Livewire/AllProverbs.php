<?php

namespace App\Livewire;

use App\Models\Tribe;
use App\Models\Signup;
use App\Models\Context;
use App\Models\Proverb;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\WithPagination;

class AllProverbs extends Component
{

    use WithPagination;

    #[Title('proverbs')]

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

    public $tribe_id;

    public $context_id;

    public function tribeId($Tid)
    {
        $this->tribe_id = $Tid;
    }

    public function contextId($Cid)
    {
        $this->context_id = $Cid;
    }

    public function render()
    {
        $proverbs = Proverb::select('proverb_text', 'proverb_translation', 'context_id', 'tribe_id', 'created_at', 'author', 'slug')
        ->when($this->tribe_id, function($query)
        {
            $query->where('tribe_id', $this->tribe_id);

            $this->reset();
        })
        ->when($this->context_id, function($query)
        {
            $query->where('context_id', $this->context_id);

            $this->reset();
        })
        ->simplePaginate(5);

        $tribes = Tribe::all();

        $contexts = Context::all();

        $trendings = Proverb::select('proverb_text', 'created_at', 'context_id', 'slug')->offset(5)->limit(4)->get(); 

        $late = Proverb::select('proverb_text', 'created_at', 'author', 'slug')->limit(3)->get();

        return view('livewire.all-proverbs', [
            'proverbs' => $proverbs,
            'tribes' => $tribes,
            'contexts' => $contexts,
            'trendings' => $trendings,
            'late' => $late
        ]);
    }
}
