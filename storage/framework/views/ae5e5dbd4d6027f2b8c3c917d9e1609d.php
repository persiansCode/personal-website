<div class="grid grid-cols-12 gap-3 pt-16 px-2">
    <div
        class="col-span-12 grid grid-cols-12 col-start-2 col-end-12 rounded-md p-2 px-5 border-[2.4px] border-powder-blue"
    >
        <div class="col-span-12 md:col-span-5 flex flex-wrap md:flex-no-wrap items-center justify-center md:justify-start gap-3">
            <div
                class="rounded-full border-powder-blue m-1 md:m-0 border-[2px] w-[4.5rem] h-[4.5rem]"
            >
                <img src="<?php echo e(asset("files/profile.jpg")); ?>" alt="" class="h-full
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
  <!--[if BLOCK]><![endif]--><?php $__errorArgs = ["first_name"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="my-2 text-red-400"><?php echo e($message); ?></p>
           <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
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
           
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ["last_name"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="my-2 text-red-400"><?php echo e($message); ?></p>
           <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
        </div>
        <div class="col-span-12">

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
        </div>
                <div class="col-span-12">

                    <textarea
                    placeholder=" متن پیغام ..."
                    type="text"
                    name="mesaage"
                    class="w-full rounded-md p-1 placeholder-white border-0 text-sm bg-[#d9c5a1] dark:bg-[#222222]"
                     wire:model.lazy="mesaage"
                    ></textarea>
                           <!--[if BLOCK]><![endif]--><?php $__errorArgs = ["mesaage"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="my-2 text-red-400"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
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
<?php /**PATH G:\programming\code\liara\resources\views/livewire/contact-with-us-page.blade.php ENDPATH**/ ?>