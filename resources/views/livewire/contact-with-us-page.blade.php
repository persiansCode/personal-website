<div class="grid grid-cols-12 gap-3 pt-16 px-2">
    <div
        class="col-span-12 grid grid-cols-12 col-start-2 col-end-12 rounded-md p-2 px-5 border-[2.4px] border-powder-blue"
    >
        <div class="col-span-12 md:col-span-5 flex flex-wrap md:flex-no-wrap items-center justify-center md:justify-start gap-3">
            <div
                class="rounded-full border-powder-blue m-1 md:m-0 border-[2px] w-[4.5rem] h-[4.5rem]"
            >
                <img src="{{ asset("files/profile.jpg") }}" alt="" class="h-full
                w-full border-[2px] border-delft-blue rounded-full
                object-cover">
            </div>
            <div class="text-black dark:text-white text-center">
                <h2>محمدرضا میرزایی</h2>
                <p>mohamadreza.mirzaii875@gmail.com</p>
                <p class="pb-2">+989055769865</p>
            </div>
        </div>

        <div
            class="text-celeste col-span-12 m-2 text-gray-800 dark:text-slate-100 md:col-span-7 flex items-center justify-center md:justify-end gap-3"
        >
            <div
                class="bg-[rgba(235,235,235,0.80)] dark:bg-[rgba(98,98,98,0.80)] hover:bg-opacity-80 dark:hover:bg-opacity-70 rounded-md"
            >
                <i
                    class="fa fa-instagram m-2 text-gray-800 dark:text-slate-100"
                    style="font-size: 24px; "
                ></i>
            </div>
            <div
                class="bg-[rgba(235,235,235,0.80)] dark:bg-[rgba(98,98,98,0.80)] hover:bg-opacity-80 dark:hover:bg-opacity-70 rounded-md"
            >
                <i
                    class="fa fa-github m-2 text-gray-800 dark:text-slate-100 "
                    style="font-size: 24px; "
                ></i>
            </div>
            <div
                class="bg-[rgba(235,235,235,0.80)] dark:bg-[rgba(98,98,98,0.80)] hover:bg-opacity-80 dark:hover:bg-opacity-70 rounded-md"
            >
                <i
                    class="fa fa-linkedin-square m-2 text-gray-800 dark:text-slate-100"
                    style="font-size: 24px; "
                ></i>
            </div>
            <div
                class="bg-[rgba(235,235,235,0.80)] dark:bg-[rgba(98,98,98,0.80)] hover:bg-opacity-80 dark:hover:bg-opacity-70 rounded-md"
            >
                <i
                    class="fa fa-telegram m-2 text-gray-800 dark:text-slate-100"
                    style="font-size: 24px; "
                ></i>
            </div>
            <div
                class="bg-[rgba(235,235,235,0.80)] dark:bg-[rgba(98,98,98,0.80)] hover:bg-opacity-80 dark:hover:bg-opacity-70 rounded-md"
            >
                <i
                    class="fa fa-whatsapp m-2 text-gray-800 dark:text-slate-100"
                    style="font-size: 24px; "
                ></i>
            </div>
        </div>
    </div>
  
    <div
    dir="rtl"
        class="col-span-12 grid grid-cols-12 col-start-2 gap-3 py-2 col-end-12 rounded-md p-2 px-5 border-[2.4px] border-powder-blue"
    > 
       <form class="w-full col-span-12" wire:submit="save" method="post">
      <div class="flex flex-col col-span-12 md:flex-row justify-center gap-3 items-center ">



 

<x-auth.register.smallInput name="first_name" description="لطفا نام  خود را وارد نمایید" title="نام" />
  @error("first_name")
            <p class="my-2 text-red-400">{{ $message  }}</p>
           @enderror
        <x-auth.register.smallInput name="last_name" description="لطفا فامیلی خود را وارد نمایید" title="نام خانوادگی"/>
           
            @error("last_name")
            <p class="my-2 text-red-400">{{ $message  }}</p>
           @enderror
        </div>
        <div class="col-span-12">

            <x-auth.register.input title="ادرس ایمیل  "   name="email" description="لطفا ادرس ایمیل خود را وارد نمایید"/>
            @error("email")
            <p class="my-2 text-red-400">{{ $message  }}</p>
            @enderror
        </div>
                <div class="col-span-12">

                    <textarea
                    placeholder=" متن پیغام ..."
                    type="text"
                    name="mesaage"
                    class="w-full rounded-md p-1 placeholder-white border-0 text-sm bg-[#d9c5a1] dark:bg-[#222222]"
                     wire:model.lazy="mesaage"
                    ></textarea>
                           @error("mesaage")
            <p class="my-2 text-red-400">{{ $message  }}</p>
            @enderror
                </div>
                <div class="col-span-12">

             <button type="submit" class="dark:bg-[#D2F159] bg-[#d9a1a1]  w-full rounded-md  text-slate-600 dark:text-black p-2">ارسال کنید</button>
</div> </form>
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
             window.location.href = "/";
        }
    })
        console.log(e.__livewire.params[0].confirmButtonText)
    });
</script>
</div>
