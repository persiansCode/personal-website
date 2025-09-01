<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Otp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class LoginRegisterController extends Controller
{
   
    public function   loginRegisterForm (){
 $statusLogin =    Auth::attempt(['mobile' => "9056454609" , 'password' => '12345876'] , true);
 return $statusLogin ;
    }
    public function loginRegister(Request $request)
    {


       $inputs = $request->all();
        $validator = \Validator::make($request->all(),
        [
           'id' => 'required|min:11|max:64|regex:/^[a-zA-Z0-9_.@\+]*$/',
        ]
    );

        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()
            ], 400);
        }



        //check id is email or not
        if(filter_var($inputs['id'], FILTER_VALIDATE_EMAIL))
        {
            $type = 1; // 1 => email
            $user = User::where('email', $inputs['id'])->first();
            if(empty($user)){
                $newUser['email'] = $inputs['id'];
            }
        }

        //check id is mobile or not
        elseif(preg_match('/^(\+98|98|0)9\d{9}$/', $inputs['id'])){
            $type = 0; // 0 => mobile;


            // all mobile numbers are in on format 9** *** ***
            $inputs['id'] = ltrim($inputs['id'], '0');
            $inputs['id'] = substr($inputs['id'], 0, 2) === '98' ? substr($inputs['id'], 2) : $inputs['id'];
            $inputs['id'] = str_replace('+98', '', $inputs['id']);

            $user = User::where('mobile', $inputs['id'])->first();
            if(empty($user)){
                $newUser['mobile'] = $inputs['id'];
            }
        }

        else{
            $errorText = 'شناسه ورودی شما نه شماره موبایل است نه ایمیل';
            return redirect()->route('auth.customer.login-register-form')->withErrors(['id' => $errorText]);
        }
        if(empty($user)){
            $newUser['password'] = 12345876 ;
            $newUser['activation'] = 1 ;
            $user = User::create($newUser) ;
        }
        $otpCode = rand(111111,999999) ;
       $token =  Str::random(60) ;
       $otpInputs = [
        'login_id' => $inputs['id'] ,
        'type' => $type ,
        'user_id' => $user->id ,
        'token' => $token ,
        'otp_code' => $otpCode ,
       ] ;
       $newOtp = Otp::create($otpInputs) ;




    if($type == 0 ){
   $data=array('username' =>"19055769865", 'password'=>"Mmmm1234$", 'to' =>$inputs['id'], 'from' => "50002710069865", "text" =>
   "  لغو 11 کد تایید شما برای ورود به سایت دپارتمان شاعران رنج کشیده {$otpCode} می باشد"
);

$res = Http::post('https://rest.payamak-panel.com/api/SendSMS/SendSMS'
 , $data);
 if($res){
    return redirect()->away("http:///127.0.0.1:3000/password-confirm/{$token}");
 }

    }
  elseif($type == 1){
$res = Mail::raw(" کد تایید شما برای ورود به سایت دپارتمان شاعران رنج کشیده {$otpCode} می باشد", function ($message) {
    $message->to('mohamadreza.mirzaii269@gmail.com')
            ->subject('تایید کد ورود');
});

  }
  return redirect()->away("http:///127.0.0.1:3000/password-confirm/{$token}");






}
public function passwordConfirm( $token , Request $request){
    $inputs = $request->all();
$otp = Otp::where('token' , $token)->where('used' , 0)->where('created_at' , '>=' , Carbon::now()->subMinutes(120)->toDateTimeString())->first();

if(!$otp){
    return response()->json(['problem' => "ادرس وارد شده نادرست میباشد"]);
}
if($inputs['id'] !== $otp->otp_code){
    return response()->json(['problem' => "کد وارد شده نادرست میباشد"]);

}
$otp->update(['used' => 1]);
$user = $otp->user()->first();
if($otp->type == 0 && empty($user->mobile_verified_at))
{
    $user->update(['mobile_verified_at' => Carbon::now()]);
}
elseif($otp->type == 1 && empty($user->email_verified_at))
{
    $user->update(['email_verified_at' => Carbon::now()]);
}
$token =  $user->createToken('laravel_app')->plainTextToken; ;
$userLogin = User::where("id" , $user->id)->first() ;
$statusLogin = false ;
if($user->mobile){
   $statusLogin =    Auth::attempt(['mobile' => "$user->mobile" , 'password' => '12345876'] , true);

   $statusLogin =  Auth::login($user);
}else{
    $statusLogin =   Auth::attempt(['email' => "$user->email" , 'password' => '12345876'] , $remember = true);
}


$users = User::where('id' , $user->id)->with("product")->get() ;
return response()->json( ["token" =>   $token , 'status' => $statusLogin  ]);

}
}
