<?php

namespace App\Livewire;

use Livewire\Component;

class Login extends Component
{

    public $email;
    public $number;
   



    public function save(){
     
           dd($this->email , $this->number) ;
    }

    public function render()
    {
        return view('livewire.login');
    }
}
