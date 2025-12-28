<?php $__env->startPush('cdn'); ?>


    <link rel="stylesheet" href="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.css">
    <script src="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.js"></script>

    <!-- Persian Date -->
    <script src="<?php echo e(asset('ckeditor/ckeditor.js')); ?>"></script>


    <link rel="stylesheet" href="<?php echo e(asset("css/cms/tomSelect.min.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("css/cms/createArticle.css")); ?>">
    <!-- <link href="https://cdn.jsdelivr.net/npm/tom-select@2.4.3/dist/css/tom-select.css" rel="stylesheet"> -->



    <style>
        .select2-container {
            width: 100% !important;
        }
    </style>
<?php $__env->stopPush(); ?>

<div class="pt-18  col-span-10 text-orange-400 px-2">
    <div class="grid grid-cols-12 gap-3 " style="padding-right: 15%;">



        <div class="col-span-12 md:col-span-5 text-orange-400  md:col-end-11 md:col-start-1">
            <div class=" flex justify-between p-4 ">
                <h3 class="relative createArticleTitle" id="createArticleTitle">
                    ساختن مقاله جدید
                </h3>
                <button class="rounded-md outline-none border-none  bg-ucla-blue text-celeste p-2">
                    برگشتن به صفحه اصلی
                </button>
            </div>
        </div>
    </div>

    <form id="form" wire:submit="submit" method="post" enctype="multipart/form-data">

        <div class="grid grid-cols-12 gap-3 " id="input-container">



        <div class="col-span-12 md:col-span-5  text-slate-800  dark:text-platinum   custom-select  md:col-start-1" id="select2" dir="rtl">
            <p class="text-slate-800 dark:text-platinum p-2">وضعیت</p>
           <select wire:model="status" name="status" class="w-full p-2 pl-4 text-slate-800 dark:text-platinum bg-sage dark:bg-[#1d232a]">
    <option >لطفا انتخاب کنید</option>

    <option value="1">فعال</option>
    <option value="0">غیرفعال</option>
</select>
        </div>
            <div class="col-span-12 md:col-span-5 text-orange-400  ">
                <p class="text-slate-800 dark:text-platinum p-2">عنوان</p>


                <input wire:model="title" type="text" name="title"
                    class="input input-md w-full p-2 pl-4 text-slate-800 dark:text-platinum bg-sage dark:bg-[#1d232a] "
                    placeholder="لطفا تایپ کنید">
                <?php $__errorArgs = ["title"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-3 " id="input-container">

            <div class="col-span-12 md:col-span-5 text-orange-400  md:col-start-1">
                <p class="text-slate-800 dark:text-platinum p-2">دسته بندی مقاله </p>
                <select wire:model="category_id" name="category_id"
                    class="w-full p-2 pl-4 text-slate-800 dark:text-platinum bg-sage dark:bg-[#1d232a]">
                    <option>لطفا انتخاب کنید</option>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <option value="<?php echo e($category['id']); ?>"> <?php echo e($category['name']); ?> </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </select>
            </div>
            <div class="col-span-12 md:col-span-5 text-orange-400  ">
                <p class="text-slate-800 dark:text-platinum p-2">images</p>

                <input type="file" wire:model="photo" name="photo"
                    class="input input-md w-full p-2 pl-4 text-slate-800 dark:text-platinum bg-sage dark:bg-[#1d232a] "
                    placeholder="لطفا تایپ کنید">
                <?php $__errorArgs = ["photo"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-3 " id="input-container">

            <div class="col-span-12 md:col-span-5 text-orange-400  md:col-start-1" id="select2" dir="ltr">
                <p class="text-slate-800 dark:text-platinum p-2 align-right" style="text-align: right">تگ ها</p>

                <div class="" wire:ignore x-init="
    new TomSelect($refs.selectElement, {
	persist: false,
	createOnBlur: true,
	create: true
}
);">
                    <input x-ref="selectElement" wire:model.lazy="tags" class="">
                </div>


                <?php $__errorArgs = ["tags"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="col-span-12 md:col-span-5 text-orange-400  ">
                <p class="text-slate-800 dark:text-platinum p-2">تاریخ</p>
                <div>

                    <div x-data  class="custom-jdp"  x-init="jalaliDatepicker.startWatch({  
                     selectedBefore: false, 

    date: true,
    time: true,
    hasSecond: true,

})">
                        <input type="text"  wire:model.lazy="date" data-jdp id="jalali-datepicker"
                            class="border p-2 rounded w-full p-2 pl-4 text-slate-800 dark:text-platinum bg-sage dark:bg-[#1d232a]"
                            placeholder="تاریخ را انتخاب کنید" />
                    </div>

                </div>

                <?php $__errorArgs = ["date"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            </div>
        </div>

<div class="grid grid-cols-12 gap-3" id="input-container" wire:ignore x-data x-init="
    CKEDITOR.replace($refs.ckeditor, {
        allowedContent: true,
        extraAllowedContent: 'div(*)[*];span(*)[*];section(*)[*];style(*)[*]'
    });
    CKEDITOR.instances.editor1.on('change', function () {
        window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('description', CKEDITOR.instances.editor1.getData());
    });
">

    <div class="col-span-12 md:col-span-10 text-slate-800 dark:text-platinum custom-select md:col-start-1" id="select2" dir="rtl">
        <p class="text-slate-800 dark:text-platinum p-2">متن مقاله</p>

        <textarea x-ref="ckeditor" id="editor1" name="description"
            class="input input-md w-full" placeholder="لطفا تایپ کنید"></textarea>

        <?php $__errorArgs = ["description"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="z-1000 text-red-400 text-[100px]"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

</div>

        <div class="grid grid-cols-12 ">

            <button type="submit"
                class="rounded-md p-3 bg-red-400 outline-none border-none mt-3 w-full col-span-10 col-start-1 col-end-11 max-h-[80px] text-white">ثبت</button>
        </div>
    </form>
    <br><br><br><br>






</div>
    <?php
        $__scriptKey = '1895025754-0';
        ob_start();
    ?>






<script type="text/javascript" src="jalalidatepicker.min.js"></script>

<script>
  
    // مطمئن شوید این خط بعد از بارگذاری jalaliDatepicker اجرا می‌شود
    console.log(TomSelect)

    new TomSelect("#input-tags", {
        persist: false,
        createOnBlur: true,
        create: true
    });   </script>
    <?php
        $__output = ob_get_clean();

        \Livewire\store($this)->push('scripts', $__output, $__scriptKey)
    ?><?php /**PATH G:\programming\code\liara\resources\views\livewire\cms\article\create-article.blade.php ENDPATH**/ ?>