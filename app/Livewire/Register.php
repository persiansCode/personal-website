<?php

namespace App\Livewire;

use App\Models\Otp;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Livewire\Attributes\On;
use Livewire\Component;

class Register extends Component
{

    public $email;
    public $number;

    public $password;
    public $first_name;
    public $last_name;


    protected function rules()
    {
        return [
            'email' => 'required|min:10|max:80|regex:/^[A-Za-z0-9@_.\+\- ]+$/',
            'number' => ['required', 'min:11', 'max:13', 'regex:/^(\+98|98|0)9\d{9}$/'],
            'password' => ['required', 'min:11', 'max:13', 'regex:/^[A-Za-z0-9@_.\+\- $# ]+$/'],
            'first_name' => ['required', 'min:11', 'max:13', 'regex:/^[آ-ی  A-Za-z0-9@_.\+\- ]+$/'],
            'last_name' => ['required', 'min:11', 'max:13', 'regex:/^[آ-ی  A-Za-z0-9@_.\+\- ]+$/'],

        ];
    }
    public function save()
    {
        $this->validate();

        $user = User::where(['email' => $this->email, 'number' => $this->number])->get();




        if ($user->isEmpty()) {
            $user = User::create(['email' => $this->email, 'number' => $this->number, 'password' => Hash::make($this->password), 'first_name' => $this->first_name, 'last_name' => $this->last_name]);
            $otpCode = rand(111111, 999999);
            $token = Str::random(60);
            $otpInputs = [
                'email' => $user->first()->email,
                'number' => $user->first()->number,
                'user_id' => $user->first()->id,
                'token' => $token,
                'otp_code' => $otpCode,
            ];
            $newOtp = Otp::create(attributes: $otpInputs);

            $data = array(
                'username' => "19055769865",
                'password' => "Mmmm1234$",
                'to' => $this->number,
                'from' => "50002710069865",
                "text" =>
                    "  لغو 11 کد تایید شما برای ورود به سایت دپارتمان شاعران رنج کشیده {$otpCode} می باشد"
            );

            $res = Http::post(
                'https://rest.payamak-panel.com/api/SendSMS/SendSMS'
                ,
                $data
            );
            if ($res) {
                return redirect()->away("http://127.0.0.1:8000/enter-password/$token");
            } else {
                $this->dispatch('swal', [
                    'title' => 'خطا  ',
                    'text' => ' رمز عبور به شماره تلفن شما ارسال نشد لطفا دوباره امتحان نمایید ',
                    'icon' => 'error',

                ]);
                return back();
            }




        } else {
            if (Auth::attempt(['email' => $this->email, 'number' => $this->number, 'password' => $this->password], true)) {
                request()->session()->regenerate();
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

    }
    public function render()
    {
        return view('livewire.register');
    }
}
