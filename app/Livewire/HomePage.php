<?php

namespace App\Livewire;

use App\Models\Proverb;
use Livewire\Attributes\Title;
use Livewire\Component;

class HomePage extends Component
{

    #[Title('home')]
    public function render()
    {

        $proverbs = Proverb::select('proverb_text', 'proverb_translation', 'context_id', 'created_at', 'author')->inRandomOrder()->take(5)->get();
        $late = Proverb::select('proverb_text', 'created_at', 'author', 'slug')->limit(3)->get();
        $trendings = Proverb::select('proverb_text', 'created_at',)->offset(5)->limit(4)->get();
        $featureds = Proverb::select('proverb_text', 'proverb_translation', 'context_id', 'tribe_id', 'slug', 'created_at', 'author')->latest()->first()->take(1)->get();

        return view('livewire.home-page',[
            'proverbs' => $proverbs,
            'trendings' => $trendings,
            'late' => $late,
            'featureds' => $featureds
            ]
        );
    }
}
