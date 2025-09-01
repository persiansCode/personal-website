<?php

namespace App\Livewire;

use App\Models\User\Permission;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
#[Middleware('web')]

class FirstPage extends Component
{
     public $title="صفحه اصلی";


    public function render()
    {
     dd(Permission::first()->roles());
 
        return view('livewire.first-page' )->layout('components.layouts.app', [
            'title' => $this->title,
        ]);;
    }
}
