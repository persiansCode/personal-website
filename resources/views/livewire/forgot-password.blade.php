@push('css')
<link rel="stylesheet" href="{{asset("css/auth/register.css")}}">
@endpush
<div class=" grid grid-cols-12 pt-18 max-h-[100vh]  py-10 pl-10" dir="rtl">

    <div class="col-span-6">
        <img src="{{ asset("files/forgotPassword.png") }}" class="rounded-md m-auto max-h-[92vh] w-[70%] " alt="">
    </div>
   <div class="col-span-6 my-auto ">
    <div class="flex gap-3 pb-14  w-full" id="logoContainer"  >
        <div class="max-w-[45px] max-h-[45px]">
        <img src="{{ asset("files/logo.svg") }}" class="rounded-md m-auto  " alt="">
      
        </div>
        <p>  محمدرضا میرزایی </p>

        
    </div>
    <div class="pb-8">
        <p class="text-xl" > رمز عبور خود را فراموش کرده اید؟ </p>
        <p class="text-sm py-3"> عبور عبور خود را تغییر دهید و سپس به سیستم وارد شوید </p>
    </div>
    <form action="">
   
 
          <x-auth.register.input title="ادرس ایمیل  " description="لطفا ادرس ایمیل خود را وارد نمایید"/>

            <button class="bg-[#D2F159] w-full rounded-md text-black p-2"> تغییررمز عبور </button>
           
            <div class="w-full p-4 justify-center flex">
                <div class="flex gap-3"><p> بازگشت به صفحه ورود </p></div>
            </div>
    </form>
   </div>
  
</div>