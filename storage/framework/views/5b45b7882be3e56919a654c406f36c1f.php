<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset("css/auth/login.css")); ?>">
<?php $__env->stopPush(); ?>
<div class=" grid grid-cols-12 pt-18 max-h-[100vh]  py-10 pl-10" dir="rtl">
          <?php if (isset($component)) { $__componentOriginal850393404922914b3279ea6d5d74f0cd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal850393404922914b3279ea6d5d74f0cd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal.error','data' => ['title' => ' شماره تلفن  ','name' => 'number','description' => 'لطفا ادرس ایمیل خود را وارد نمایید']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modal.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ' شماره تلفن  ','name' => 'number','description' => 'لطفا ادرس ایمیل خود را وارد نمایید']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal850393404922914b3279ea6d5d74f0cd)): ?>
<?php $attributes = $__attributesOriginal850393404922914b3279ea6d5d74f0cd; ?>
<?php unset($__attributesOriginal850393404922914b3279ea6d5d74f0cd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal850393404922914b3279ea6d5d74f0cd)): ?>
<?php $component = $__componentOriginal850393404922914b3279ea6d5d74f0cd; ?>
<?php unset($__componentOriginal850393404922914b3279ea6d5d74f0cd); ?>
<?php endif; ?>

    <div class="col-span-6  hidden md:grid  " >
        <img src="<?php echo e(asset("files/login.png")); ?>" class="rounded-md m-auto max-h-[92vh] w-[75%] " alt="">
    </div>
   
   
   <div  class="  col-span-6  my-auto " id="rightSection">
    <div class="flex gap-3 pb-5 w-full items-center" id="logoContainer"  >
        <div class="max-w-[45px] max-h-[45px]">
        <img src="<?php echo e(asset("files/logo.svg")); ?>" class="rounded-md m-auto  " alt="">
      
        </div>
        <p class="text-slate-600 dark:text-white">  محمدرضا میرزایی </p>

        
    </div>
    <div class="pb-3">
        <p  class="text-slate-600 dark:text-white text-sm"> به اکانت خود وارد شوید </p>
    </div>
    <form wire:submit="save">
        <?php if (isset($component)) { $__componentOriginalc5cb07e7528d077a0649c764dea71b13 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc5cb07e7528d077a0649c764dea71b13 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.auth.register.input','data' => ['title' => 'ادرس ایمیل یا شماره تلفن ','name' => 'input','description' => 'لطفا ادرس ایمیل یا شماره تلفن خود را وارد نمایید']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth.register.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'ادرس ایمیل یا شماره تلفن ','name' => 'input','description' => 'لطفا ادرس ایمیل یا شماره تلفن خود را وارد نمایید']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc5cb07e7528d077a0649c764dea71b13)): ?>
<?php $attributes = $__attributesOriginalc5cb07e7528d077a0649c764dea71b13; ?>
<?php unset($__attributesOriginalc5cb07e7528d077a0649c764dea71b13); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc5cb07e7528d077a0649c764dea71b13)): ?>
<?php $component = $__componentOriginalc5cb07e7528d077a0649c764dea71b13; ?>
<?php unset($__componentOriginalc5cb07e7528d077a0649c764dea71b13); ?>
<?php endif; ?>
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ["email"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="my-2 text-red-400"><?php echo e($message); ?></p>
           <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
          <?php if (isset($component)) { $__componentOriginalc5cb07e7528d077a0649c764dea71b13 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc5cb07e7528d077a0649c764dea71b13 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.auth.register.input','data' => ['title' => '  پسورد  ','name' => 'password','description' => 'لطفا پسورد  خود را وارد نمایید']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth.register.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => '  پسورد  ','name' => 'password','description' => 'لطفا پسورد  خود را وارد نمایید']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc5cb07e7528d077a0649c764dea71b13)): ?>
<?php $attributes = $__attributesOriginalc5cb07e7528d077a0649c764dea71b13; ?>
<?php unset($__attributesOriginalc5cb07e7528d077a0649c764dea71b13); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc5cb07e7528d077a0649c764dea71b13)): ?>
<?php $component = $__componentOriginalc5cb07e7528d077a0649c764dea71b13; ?>
<?php unset($__componentOriginalc5cb07e7528d077a0649c764dea71b13); ?>
<?php endif; ?>
           <!--[if BLOCK]><![endif]--><?php $__errorArgs = ["number"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="my-2 text-red-400"><?php echo e($message); ?></p>
           <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
<div class="flex w-full justify-between pb-4">
    <div class="flex gap-2 items-center text-slate-600 dark:text-white">
        <input type="checkbox" checked="checked" class="checkbox checkbox-success " />
        برای 30 روز مرا به خاطر بسپارید
    </div>
    <p class=" text-[#098742] dark:text-[#D2F159]  text-sm">رمز عبور خود را فراموش کرده اید؟</p>
</div>
            <button class="dark:bg-[#D2F159] bg-[#d9a1a1]  w-full rounded-md  text-slate-600 dark:text-black p-2">ثبت نام کنید</button>
            <div class="bg-[#d9c5a1] dark:bg-[#222222] py-3 my-6 rounded-md flex gap-3 justify-center items-center">
            <img src="<?php echo e(asset('files/google.svg')); ?>" />
            <p class="text-slate-600 dark:text-white text-sm  "> با گوگل وارد شوید </p>
            </div>
             
            <div class="w-full p-4 justify-center flex">
                <a href="http:///register">
                <div class="flex gap-3"><p class="text-slate-600 dark:text-white">اکانتی ندارید؟</p> <p class= "text-[#098742] dark:text-[#D2F159]">همین الان ثبت نام کنید</p></div>
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


</div><?php /**PATH G:\programming\code\liara\resources\views/livewire/login-pagee.blade.php ENDPATH**/ ?>