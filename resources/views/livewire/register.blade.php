@push('css')
<link rel="stylesheet" href="{{asset("css/auth/register.css")}}">
@endpush
<div class=" grid grid-cols-12 pt-18 max-h-[100vh]  py-10 pl-10" dir="rtl">

    <div class="col-span-6">
        <img src="{{ asset("files/register.png") }}" class="rounded-md m-auto max-h-[95vh] w-[80%] " alt="">
    </div>
   <div class="col-span-6 ">
    <div class="flex gap-3 pb-4  w-full" id="logoContainer"  >
        <div class="max-w-[45px] max-h-[45px]">
        <img src="{{ asset("files/logo.svg") }}" class="rounded-md m-auto  " alt="">
      
        </div>
        <p>  محمدرضا میرزایی </p>

        
    </div>
    <form  wire:submit="save">
        <div class="flex flex-col md:flex-row justify-center gap-3 items-center ">

  

<x-auth.register.smallInput name="first_name" description="لطفا نام  خود را وارد نمایید" title="نام" />
  @error("first_name")
            <p class="my-2 text-red-400">{{ $message  }}</p>
           @enderror
        <x-auth.register.smallInput name="last_name" description="لطفا فامیلی خود را وارد نمایید" title="نام خانوادگی"/>
           
            @error("last_name")
            <p class="my-2 text-red-400">{{ $message  }}</p>
           @enderror
        </div>
                 <x-auth.register.input title="ادرس ایمیل  "   name="email" description="لطفا ادرس ایمیل خود را وارد نمایید"/>
                      @error("email")
            <p class="my-2 text-red-400">{{ $message  }}</p>
           @enderror
          <x-auth.register.input title=" شماره تلفن  "  name="number"  description="لطفا   شماره تلفن خود را وارد نمایید"/>
               @error("number")
            <p class="my-2 text-red-400">{{ $message  }}</p>
           @enderror
          <x-auth.register.input title=" پسورد  "   name="password" description="لطفا  رمز خود را وارد نمایید"/>
               @error("password")
            <p class="my-2 text-red-400">{{ $message  }}</p>
           @enderror


             <button class="dark:bg-[#D2F159] bg-[#d9a1a1]  w-full rounded-md  text-slate-600 dark:text-black p-2">ثبت نام کنید</button>
            <div class="bg-[#d9c5a1] dark:bg-[#222222] py-3 my-6 rounded-md flex gap-3 justify-center items-center">
            <img src="{{ asset('files/google.svg') }}" />
            <p class="text-slate-600 dark:text-white text-sm  "> با گوگل وارد شوید </p>
            </div>
              <div class="w-full p-4 justify-center flex">
           <div class="flex gap-3"><p class="text-slate-600 dark:text-white">اکانتی ندارید؟</p> <p class= "text-[#098742] dark:text-[#D2F159]">همین الان ثبت نام کنید</p></div>
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