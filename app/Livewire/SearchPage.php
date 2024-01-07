<?php

namespace App\Livewire;

use App\Models\Signup;
use App\Models\Proverb;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\WithPagination;

class SearchPage extends Component
{
    use WithPagination; 

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

    public $search;
    public $term;

    public function mount()
    {
        $this->fill(request()->only('search'));
        $this->term = '%'.$this->search.'%';
    }

    public function render()
    {
        $trendings = Proverb::select('proverb_text', 'created_at', 'context_id', 'slug')->offset(5)->limit(4)->get(); 

        $late = Proverb::select('proverb_text', 'created_at', 'author', 'slug')->limit(3)->get();

        $data = Proverb::where('proverb_text','like',$this->term)->simplePaginate(5);

        return view('livewire.search-page', [
            'trendings' => $trendings,
            'late' => $late,
            'data' => $data
        ]);
    }
}
