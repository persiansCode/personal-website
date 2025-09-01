<?php

namespace App\Livewire;

use Livewire\Component;

class CmsFirstPage extends Component
{
    public function render()
    {
   
        return view('livewire.cms.cms-first-page')->layout("components.layouts.cms" , ['title' => "پنل مدیریت"]);
    }
}
