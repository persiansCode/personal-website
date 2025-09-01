@push('css')
<link rel="stylesheet" href="{{asset("css/auth/login.css")}}">
@endpush
<div class=" grid grid-cols-12 pt-18 max-h-[100vh]  py-10 pl-10" dir="rtl">
          <x-modal.error title=" شماره تلفن  " name="number" description="لطفا ادرس ایمیل خود را وارد نمایید"/>

    <div class="col-span-6  hidden md:grid  " >
        <img src="{{ asset("files/login.png") }}" class="rounded-md m-auto max-h-[92vh] w-[75%] " alt="">
    </div>
   
   
   <div  class="  col-span-6  my-auto " id="rightSection">
    <div class="flex gap-3 pb-5 w-full" id="logoContainer"  >
        <div class="max-w-[45px] max-h-[45px]">
        <img src="{{ asset("files/logo.svg") }}" class="rounded-md m-auto  " alt="">
      
        </div>
        <p>  محمدرضا میرزایی </p>

        
    </div>
    <div class="pb-3">
        <p class="text-sm" > به اکانت خود وارد شوید </p>
    </div>
    <form wire:submit="save">
        <x-auth.register.input title="ادرس ایمیل یا شماره تلفن " name="input"  description="لطفا ادرس ایمیل یا شماره تلفن خود را وارد نمایید"/>
            @error("email")
            <p class="my-2 text-red-400">{{ $message  }}</p>
           @enderror
          <x-auth.register.input title="  پسورد  " name="password" description="لطفا پسورد  خود را وارد نمایید"/>
           @error("number")
            <p class="my-2 text-red-400">{{ $message  }}</p>
           @enderror
<div class="flex w-full justify-between pb-4">
    <div class="flex gap-2 items-center">
        <input type="checkbox" checked="checked" class="checkbox checkbox-success" />
        برای 30 روز مرا به خاطر بسپارید
    </div>
    <p class="text-[#D2F159] text-sm">رمز عبور خود را فراموش کرده اید؟</p>
</div>
            <button class="bg-[#D2F159] w-full rounded-md text-black p-2">ثبت نام کنید</button>
            <div class="bg-[#222222] py-3 my-6 rounded-md flex gap-3 justify-center items-center">
            <img src="{{ asset('files/google.svg') }}" />
            <p class="text-sm "> با گوگل وارد شوید </p>
            </div>
             
            <div class="w-full p-4 justify-center flex">
                <a href="http://localhost:8000/register">
                <div class="flex gap-3"><p>اکانتی ندارید؟</p> <p class="text-[#D2F159]">همین الان ثبت نام کنید</p></div>
            </a>
            </div>
    </form>
   </div>
<script>
    window.addEventListener('swal',function(e) {
        let params = e.__livewire.params[0]
        Swal.fire({
            title:  params.title ,
            icon: params.icon,
            text:  params.text ,
 
            timer: 3000,
        confirmButtonText : params.confirmButtonText ? params.confirmButtonText : "",
        showConfirmButton: params.confirmButtonText ? true : false,
    }).then((result) => {
        if (result.isConfirmed) {
             window.location.href = "/register";
        }
    })
        console.log(e.__livewire.params[0].confirmButtonText)
    });
</script>


</div>