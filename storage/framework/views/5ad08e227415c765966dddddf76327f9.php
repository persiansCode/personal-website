<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset("css/auth/register.css")); ?>">
<?php $__env->stopPush(); ?>
<div class=" grid grid-cols-12 pt-18 max-h-[100vh]  py-10 pl-10" dir="rtl">

    <div class="col-span-6">
        <img src="<?php echo e(asset("files/register.png")); ?>" class="rounded-md m-auto max-h-[95vh] w-[80%] " alt="">
    </div>
   <div class="col-span-6 ">
    <div class="flex gap-3 pb-4  w-full" id="logoContainer"  >
        <div class="max-w-[45px] max-h-[45px]">
        <img src="<?php echo e(asset("files/logo.svg")); ?>" class="rounded-md m-auto  " alt="">
      
        </div>
        <p>  محمدرضا میرزایی </p>

        
    </div>
    <form  wire:submit="save">
        <div class="flex flex-col md:flex-row justify-center gap-3 items-center ">

  

<?php if (isset($component)) { $__componentOriginal9b0e63c1f6b5a553f9581ff194a8881f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9b0e63c1f6b5a553f9581ff194a8881f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.auth.register.smallInput','data' => ['name' => 'first_name','description' => 'لطفا نام  خود را وارد نمایید','title' => 'نام']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth.register.smallInput'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'first_name','description' => 'لطفا نام  خود را وارد نمایید','title' => 'نام']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9b0e63c1f6b5a553f9581ff194a8881f)): ?>
<?php $attributes = $__attributesOriginal9b0e63c1f6b5a553f9581ff194a8881f; ?>
<?php unset($__attributesOriginal9b0e63c1f6b5a553f9581ff194a8881f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9b0e63c1f6b5a553f9581ff194a8881f)): ?>
<?php $component = $__componentOriginal9b0e63c1f6b5a553f9581ff194a8881f; ?>
<?php unset($__componentOriginal9b0e63c1f6b5a553f9581ff194a8881f); ?>
<?php endif; ?>
  <?php $__errorArgs = ["first_name"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="my-2 text-red-400"><?php echo e($message); ?></p>
           <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <?php if (isset($component)) { $__componentOriginal9b0e63c1f6b5a553f9581ff194a8881f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9b0e63c1f6b5a553f9581ff194a8881f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.auth.register.smallInput','data' => ['name' => 'last_name','description' => 'لطفا فامیلی خود را وارد نمایید','title' => 'نام خانوادگی']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth.register.smallInput'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'last_name','description' => 'لطفا فامیلی خود را وارد نمایید','title' => 'نام خانوادگی']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9b0e63c1f6b5a553f9581ff194a8881f)): ?>
<?php $attributes = $__attributesOriginal9b0e63c1f6b5a553f9581ff194a8881f; ?>
<?php unset($__attributesOriginal9b0e63c1f6b5a553f9581ff194a8881f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9b0e63c1f6b5a553f9581ff194a8881f)): ?>
<?php $component = $__componentOriginal9b0e63c1f6b5a553f9581ff194a8881f; ?>
<?php unset($__componentOriginal9b0e63c1f6b5a553f9581ff194a8881f); ?>
<?php endif; ?>
           
            <?php $__errorArgs = ["last_name"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="my-2 text-red-400"><?php echo e($message); ?></p>
           <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
                 <?php if (isset($component)) { $__componentOriginalc5cb07e7528d077a0649c764dea71b13 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc5cb07e7528d077a0649c764dea71b13 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.auth.register.input','data' => ['title' => 'ادرس ایمیل  ','name' => 'email','description' => 'لطفا ادرس ایمیل خود را وارد نمایید']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth.register.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'ادرس ایمیل  ','name' => 'email','description' => 'لطفا ادرس ایمیل خود را وارد نمایید']); ?>
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
                      <?php $__errorArgs = ["email"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="my-2 text-red-400"><?php echo e($message); ?></p>
           <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          <?php if (isset($component)) { $__componentOriginalc5cb07e7528d077a0649c764dea71b13 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc5cb07e7528d077a0649c764dea71b13 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.auth.register.input','data' => ['title' => ' شماره تلفن  ','name' => 'number','description' => 'لطفا   شماره تلفن خود را وارد نمایید']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth.register.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ' شماره تلفن  ','name' => 'number','description' => 'لطفا   شماره تلفن خود را وارد نمایید']); ?>
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
               <?php $__errorArgs = ["number"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="my-2 text-red-400"><?php echo e($message); ?></p>
           <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          <?php if (isset($component)) { $__componentOriginalc5cb07e7528d077a0649c764dea71b13 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc5cb07e7528d077a0649c764dea71b13 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.auth.register.input','data' => ['title' => ' پسورد  ','name' => 'password','description' => 'لطفا  رمز خود را وارد نمایید']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth.register.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ' پسورد  ','name' => 'password','description' => 'لطفا  رمز خود را وارد نمایید']); ?>
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
               <?php $__errorArgs = ["password"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="my-2 text-red-400"><?php echo e($message); ?></p>
           <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


             <button class="dark:bg-[#D2F159] bg-[#d9a1a1]  w-full rounded-md  text-slate-600 dark:text-black p-2">ثبت نام کنید</button>
            <div class="bg-[#d9c5a1] dark:bg-[#222222] py-3 my-6 rounded-md flex gap-3 justify-center items-center">
            <img src="<?php echo e(asset('files/google.svg')); ?>" />
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
</div><?php /**PATH G:\programming\code\liara\resources\views\livewire\register.blade.php ENDPATH**/ ?>