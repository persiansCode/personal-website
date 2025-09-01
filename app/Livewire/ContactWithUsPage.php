<?php

namespace App\Livewire;

use Livewire\Component;

class ContactWithUsPage extends Component
{
    public function render()
    {
        return view('livewire.contact-with-us-page')->layout("components.layouts.app" , ['title' =>  " تماس با من "]);
    }
}
