<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset("css/auth/checkEmail.css")); ?>">
<?php $__env->stopPush(); ?>
<div class=" grid grid-cols-12 pt-18 max-h-[100vh]py-10 pl-10" dir="rtl">

    <div class="col-span-6 hidden md:grid  ">
        <img src="<?php echo e(asset("files/enterPassword.png")); ?>" class="rounded-md m-auto max-h-[92vh] w-[75%] " alt="">
    </div>
   <div class="  col-span-6  my-auto " id="rightSection" >
    <div class="flex gap-3 pb-14  w-full" id="logoContainer"  >
        <div class="max-w-[45px] max-h-[45px]">
        <img src="<?php echo e(asset("files/logo.svg")); ?>" class="rounded-md m-auto  " alt="">
      
        </div>
        <p class="text-black dark:text-white">  محمدرضا میرزایی </p>

        
    </div>
    <div class="pb-8">
        <p class="text-xl text-black dark:text-white" > ایمیل خود را چک کنید </p>
        <p class="text-sm py-3 text-black dark:text-white">  ما برایتان لینکی فرستادیم برای برگشت به اکانتتان  </p>
    </div>
    <form action="">
   
 


            <button class="bg-[#D2F159] w-full rounded-md text-black p-3">  بصورتی دستی کد را وارد کنید  </button>
           
            <div class="w-full p-4 justify-center flex">
                <div class="flex gap-3 text-black dark:text-white"><p> بازگشت به صفحه ورود </p></div>
            </div>
    </form>
   </div>


</div>
<?php /**PATH G:\programming\code\liara\resources\views\livewire\check-email.blade.php ENDPATH**/ ?>