<?php

namespace App\Livewire;

use Livewire\Component;

class ContactWithUs extends Component
{
    public function render()
    {
        $items = \App\Models\ContactWithUs::orderBy('created_at', 'desc')->paginate(2)->withQueryString();

        return view('livewire.contact-with-us' ,  compact('items'));
    }
}
