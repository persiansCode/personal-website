<?php

namespace App\Livewire;

use Livewire\Component;

class ReadPost extends Component
{
    public $title;

    public function mount($title = null)
    {
        $this->title = $title;
    }
    public function render()
    {
        return view('livewire.read-post')->layout("components.layouts.app" , ['title' => "پست ها"]);;
    }
    }

