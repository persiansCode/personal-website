<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset("css/auth/register.css")); ?>">
<?php $__env->stopPush(); ?>
<div class=" grid grid-cols-12 pt-18 max-h-[100vh]  py-10 pl-10" dir="rtl">

    <div class="col-span-6">
        <img src="<?php echo e(asset("files/enterPassword.png")); ?>" class="rounded-md m-auto max-h-[92vh] w-[75%] " alt="">
    </div>
   <div class="col-span-6 my-auto ">
    <div class="flex gap-3 pb-14  w-full" id="logoContainer"  >
        <div class="max-w-[45px] max-h-[45px]">
        <img src="<?php echo e(asset("files/logo.svg")); ?>" class="rounded-md m-auto  " alt="">
      
        </div>
        <p>  محمدرضا میرزایی </p>

        
    </div>
    <div class="pb-8">
        <p class="text-xl" > رمز عبور خود را وارد کنید </p>
        <p class="text-sm py-3">  لحظاتی پیش برایتان کد تاییدی را ارسال کردیم ان را وارد نموده و وارد سیستم شوید </p>
    </div>
    <form wire:submit="save">
   
 
        <div class="flex gap-7 justify-center my-5" id="code-inputs" dir="ltr">
    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $codes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <input
            type="text"
            maxlength="1"
            id="<?php echo e($index); ?>"
            class="w-14 h-14 text-center text-[#D2F159] border border-[#888888]  rounded"
            wire:model.lazy="codes.<?php echo e($index); ?>"
            oninput="moveFocus(event ,  this, <?php echo e($index); ?>)"
            onkeydown="handleBackspace(event, <?php echo e($index); ?>)"
        />
        <?php 
             if ($index === 2) {
              echo "<p class= 'flex items-center'> ___ </p>";
             }
        ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
</div>


            <button class="bg-[#D2F159] w-full rounded-md text-black p-3">  اعتبار سنجی کد </button>
           
            <div class="w-full p-4 justify-center flex">
                <a href="http://localhost:8000/login">
                <div class="flex gap-3"><p> بازگشت به صفحه ورود </p></div></a>
            </div>
    </form>
   </div>
<script>
    function moveFocus(e , el, index) {
        if (el.value.length == 1) {
           
            const next =  document.getElementById(index + 1 ) ;
            if (next){
                console.log(next)
                 next.focus();
            }
        }
    }

    function handleBackspace(e, index) {
        if (e.key === 'Backspace' && e.target.value === '') {
            const prev = document.querySelectorAll('#code-inputs input')[index - 1];
            if (prev) prev.focus();
        }
    }
</script>
<script>
    window.addEventListener('swal',function(e) {
        let params = e.__livewire.params[0]
        Swal.fire({
            title:  params.title ,
            icon: params.icon,
            text:  params.text ,
            timer: 3000,
            showConfirmButton: false,
    })
       
    });
</script>
</div>
<?php /**PATH E:\programming\code\myProject\resources\views/livewire/enter-password.blade.php ENDPATH**/ ?>