<?php

namespace App\Livewire;
use App\Models\Otp;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use SweetAlert2\Laravel\Traits\WithSweetAlert;



use Illuminate\Support\Facades\Log;
use Livewire\Attributes\On;
use Livewire\Component;

class LoginPage extends Component
{
    use WithSweetAlert;

    public $input;
    public $password;


    protected function rules()
    {
        return [
            'input' => 'required|min:10|max:80|regex:/^[A-Za-z0-9@_.\+\- ]+$/',
            'password' => [
                'required',
                'min:8',
                'max:20',

            ],
        ];
    }

    #[On('refreshStats')]
    public function refreshStats()
    {
        logger('refreshStats triggered');
    }

    public function save()
    {
        $this->validate();
        //    dd($this->email , $this->number) ;
        $user = User::where(['email' => $this->input])->orWhere('number', $this->input)->get();




        if (!$user) {
            //  logger('refreshStats triggered');
            $this->dispatch('swal', [
                'title' => 'کاربری وجود ندارد',
                'text' => 'کاربری با مشخصات وارد شده در سیستم ما وجود ندارد',
                'icon' => 'error',
                'confirmButtonText' => 'رفتن به صفحه ثبت‌نام',

            ]);



        } else {


            if (filter_var($this->input, FILTER_VALIDATE_EMAIL)) {
                $user = Auth::attempt(['email' => $this->input, 'password' => $this->password], true);
                request()->session()->regenerate();
           
                if ($user) {
                    $this->dispatch('swal', [
                        'title' => 'موفقیت ',
                        'text' => ' شما با موفقیت به سیستم وارد شدید ',
                        'icon' => 'success',

                    ]);
                    return redirect()->route('home-page');
                } else {
                    $this->dispatch('swal', [
                        'title' => 'خطا  ',
                        'text' => ' رمز عبور شما نادرست میباشد ',
                        'icon' => 'error',

                    ]);
                    return back();
                }


            } else {
            $user =    Auth::attempt(['number' => $this->input, 'password' => $this->password], true);
                request()->session()->regenerate();
                     if ($user) {
                    $this->dispatch('swal', [
                        'title' => 'موفقیت ',
                        'text' => ' شما با موفقیت به سیستم وارد شدید ',
                        'icon' => 'success',

                    ]);
                    return redirect()->route('home-page');
                } else {
                    $this->dispatch('swal', [
                        'title' => 'خطا  ',
                        'text' => ' رمز عبور شما نادرست میباشد ',
                        'icon' => 'error',

                    ]);
                    return back();
                }
            }

            //    return redirect()->away("https://mohammadrezamirzaei.liara.run/enter-password/{$newOtp->token}") ;



        }

    }
    public function render()
    {

        return view('livewire.login-pagee');
    }
}
