<?php

namespace App\Livewire;

use App\Models\Signup;
use Livewire\Attributes\Layout;
use Livewire\Component;

class AdminHome extends Component
{
    #[Layout('components.layouts.adminLayout')]
    public function render()
    {

        $users = Signup::orderBy('created_at', 'DESC')->get();
        return view('livewire.admin-home', [
            'users' => $users
        ]);
    }
}
