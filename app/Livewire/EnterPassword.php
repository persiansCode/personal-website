<?php

namespace App\Livewire;

use App\Models\Otp;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class EnterPassword extends Component
{
    public $otp;
    public $fullCode;
    public $codes = ['', '', '', '', '', ''];
    public function mount($otp)
    {
        $this->otp = $otp;

    }

    public function save()
    {
     $otp = Otp::where(["token" => $this->otp])->get();

        if($otp->isEmpty()){
      $this->dispatch('swal', [
 'title' => 'خطا ',
    'text' => '  ادرس وارد شده نادرست می باشد ',
    'icon' => 'error',

]);
return back();
}
     if($otp->first()->created_at <= Carbon::now()->subMinutes(2)->toDateTimeString()){
             $this->dispatch('swal', [
 'title' => 'خطا ',
    'text' => ' تاریخ انقضای توکن  گذشته است ',
    'icon' => 'error',

]);
return back();
     }
        $full_code = implode($this->codes);
        $otp = Otp::where(['token' => $this->otp])
        ->where(['otp_code'=>$full_code])
        ->where('created_at' , '>=', Carbon::now()->subMinutes(4)->toDateTimeString());

if(  $full_code !== $otp->first()->otp_code){
    $this->dispatch('swal', [
 'title' => 'خطا ',
    'text' => 'کد وارد شده اشتباه میباشد',
    'icon' => 'error',

]);

}

$otp->update(['used' => 1]);
$otp = Otp::where('token', $this->otp)->first();
$user = $otp->user; // حالا رابطه کار می‌کنه
$user->email_verified_at = Carbon::now();
$result = $user->save();



         $this->dispatch('swal', [
                    'title' => 'موفقیت ',
                    'text' => '  شما با موفقیت به سیستم وارد شدید لطفا لاگین نمایید',
                    'icon' => 'success',

                ]);
                return back();
    }

    public function updatedCodes()
    {
        // وقتی همه‌ی کدها پر شدن، می‌تونی اینجا پردازش انجام بدی
        if (!in_array('', $this->codes)) {
            $fullCode = implode('', $this->codes);
            // مثلاً ارسال به سرور یا بررسی اعتبار
        }
    }

    public function render()
    {

        return view('livewire.enter-password');
    }
}
