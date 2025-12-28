<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset("css/auth/register.css")); ?>">
<?php $__env->stopPush(); ?>
<div class=" grid grid-cols-12 pt-18 max-h-[100vh]  py-10 pl-10" dir="rtl">

    <div class="col-span-6">
        <img src="<?php echo e(asset("files/EnterForgotPassword.png")); ?>" class="rounded-md m-auto max-h-[92vh] w-[75%] " alt="">
    </div>
   <div class="col-span-6 my-auto ">
    <div class="flex gap-3 pb-14  w-full" id="logoContainer"  >
        <div class="max-w-[45px] max-h-[45px]">
        <img src="<?php echo e(asset("files/logo.svg")); ?>" class="rounded-md m-auto  " alt="">
      
        </div>
        <p>  محمدرضا میرزایی </p>

        
    </div>
    <div class="pb-8">
        <p class="text-xl" > رمز عبور خود را فراموش کرده اید؟ </p>
        <p class="text-sm py-3"> عبور عبور خود را تغییر دهید و سپس به سیستم وارد شوید </p>
    </div>
    <form action="">
   
 
     <?php if (isset($component)) { $__componentOriginalc5cb07e7528d077a0649c764dea71b13 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc5cb07e7528d077a0649c764dea71b13 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.auth.register.input','data' => ['title' => 'ادرس ایمیل  ','description' => 'لطفا ادرس ایمیل خود را وارد نمایید']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth.register.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'ادرس ایمیل  ','description' => 'لطفا ادرس ایمیل خود را وارد نمایید']); ?>
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
          <?php if (isset($component)) { $__componentOriginalc5cb07e7528d077a0649c764dea71b13 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc5cb07e7528d077a0649c764dea71b13 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.auth.register.input','data' => ['title' => ' شماره تلفن  ','description' => 'لطفا شماره تلفن خود را وارد نمایید']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth.register.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ' شماره تلفن  ','description' => 'لطفا شماره تلفن خود را وارد نمایید']); ?>
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

            <button class="bg-[#D2F159] w-full rounded-md text-black p-2"> تغییررمز عبور </button>
           
            <div class="w-full p-4 justify-center flex">
                <div class="flex gap-3"><p> بازگشت به صفحه ورود </p></div>
            </div>
    </form>
   </div>
  
</div><?php /**PATH G:\programming\code\liara\resources\views\livewire\enetr-forgot-password.blade.php ENDPATH**/ ?>