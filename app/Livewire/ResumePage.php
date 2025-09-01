<?php

namespace App\Livewire;

use Livewire\Component;

class ResumePage extends Component
{
    public function render()
    {
        return view('livewire.resume-page')->layout("components.layouts.app" , ['title' =>  "رزومه من"]);;
    }
}
