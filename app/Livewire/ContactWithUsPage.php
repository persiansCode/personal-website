<?php

namespace App\Livewire;

use App\Models\ContactWithUs;
use Livewire\Component;

class ContactWithUsPage extends Component
{
        public $mesaage;

        public $email;
    public $first_name;
    public $last_name;

        protected function rules()
    {
        return [
            'email' => 'required|min:10|max:80|regex:/^[A-Za-z0-9@_.\+\- ]+$/',
            'first_name' => ['required', 'min:11', 'max:60', 'regex:/^[آ-ی  A-Za-z0-9@_.\+\- ]+$/'],
            'last_name' => ['required', 'min:11', 'max:60', 'regex:/^[آ-ی  A-Za-z0-9@_.\+\- ]+$/'],
            'mesaage' => ['required', 'min:11', 'max:400', 'regex:/^[آ-ی  A-Za-z0-9@_.\+\- ]+$/'],

        ];
    }
    public function save()
    {   
        $this->validate();

     $new=  ContactWithUs::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'mesaage' => $this->mesaage,
    
    ]);

if($new->wasRecentlyCreated ){
        $this->dispatch('swal', [
                    'title' => 'موفقیت  ',
                    'text' => ' پیغام شما با موفقیت ارسال شد ',
                    'icon' => 'success',

                ]);
}


else{
        $this->dispatch('swal', [
                    'title' => 'خطا   ',
                    'text' => ' پیغام شما ارسال نشد ',
                    'icon' => 'error',

                ]);
}

        }

    
    public function render()
    {
        return view('livewire.contact-with-us-page')->layout("components.layouts.app" , ['title' =>  " تماس با من "]);
    }
}
