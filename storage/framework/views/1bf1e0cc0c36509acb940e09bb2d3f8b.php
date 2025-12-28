<?php $__env->startPush('cdn'); ?>


<link rel="stylesheet" href="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.css">
<script src="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.js"></script>


<link rel="stylesheet" href="<?php echo e(asset("css/cms/tomSelect.min.css")); ?>">
<link rel="stylesheet" href="<?php echo e(asset("css/cms/createArticle.css")); ?>" >
<!-- <link href="https://cdn.jsdelivr.net/npm/tom-select@2.4.3/dist/css/tom-select.css" rel="stylesheet"> -->


<!-- Persian Date -->

<style>
   .select2-container{
        width: 100% !important;
    }
</style>


<?php $__env->stopPush(); ?>

<div class="pt-18  col-span-10 text-orange-400 px-2" >
    <div class="grid grid-cols-12 gap-3 pt-10" style="padding-right: 15%;">



        <div class="col-span-12 md:col-span-5  text-slate-800  dark:text-platinum   md:col-end-11 md:col-start-1">
                <div class=" flex justify-between p-4 ">
        <h3 class="relative text-slate-800 dark:text-slate-200 createArticleTitle" id="createArticleTitle">
            <a href="https://mohammadrezamirzaei.liara.run/cms/articles/create-category-articles">
            ساختن مقاله جدید</a>
        </h3>
        <button class="rounded-md outline-none border-none bg-sage  dark:bg-[#2b3046] text-slate-800 dark:text-slate-200 p-2">
            برگشتن به صفحه اصلی
        </button>
    </div>
        </div>
    </div>
    
<form id="form" wire:submit="submit" method="post"  enctype="multipart/form-data">
    
    <div class="grid grid-cols-12 gap-3 " id="input-container" >



        <div class="col-span-12 md:col-span-5  text-slate-800  dark:text-platinum   md:col-start-1">
    

               <p class="text-slate-800 dark:text-platinum p-2"> اسم دسته بندی </p>


            <input wire:model="name" value="old('name')" type="text" name="name" class="input input-md w-full bg-sage dark:bg-[#1d232a] " placeholder="لطفا تایپ کنید">
            <?php $__errorArgs = ["name"];
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
        <div class="col-span-12 md:col-span-5  text-slate-800  dark:text-platinum   ">
               <p class="text-slate-800 dark:text-platinum p-2"> توضیحات </p>
            <input type="text" name="description" wire:model="description"  class="input input-md w-full bg-sage dark:bg-[#1d232a] " placeholder="لطفا تایپ کنید">
            <?php $__errorArgs = ["description"];
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
    <div class="grid grid-cols-12 gap-3 " id="input-container" >

        <div class="col-span-12 md:col-span-5  text-slate-800  dark:text-platinum   md:col-start-1">
          <p class="text-slate-800 dark:text-platinum p-2">images</p>
            
            <input type="file" wire:model="photo" name="photo" class="input input-md w-full bg-sage dark:bg-[#1d232a] " placeholder="لطفا تایپ کنید">
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
        <div class="col-span-12 md:col-span-5  text-slate-800  dark:text-platinum   ">
          <p class="text-slate-800 dark:text-platinum p-1 align-right" style="text-align: right">تگ ها</p>
        
      <div class="" wire:ignore x-init="
    new TomSelect($refs.selectElement, {
	persist: false,
	createOnBlur: true,
	create: true
}
);">
    <input x-ref="selectElement" wire:model.lazy="tags" class="py-2  w-full" >
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
    </div>
    <div class="grid grid-cols-12 gap-3 " id="input-container" >

        <div class="col-span-12 md:col-span-10  text-slate-800  dark:text-platinum   custom-select  md:col-start-1" id="select2" dir="rtl">
            <p class="text-slate-800 dark:text-platinum p-2">وضعیت</p>
           <select wire:model="status" name="status" class="w-full p-2 pl-4 text-slate-800 dark:text-platinum bg-sage dark:bg-[#1d232a]">
    <option >لطفا انتخاب کنید</option>

    <option value="1">فعال</option>
    <option value="0">غیرفعال</option>
</select>
        </div>
     
    </div>

    

    
    <div class="grid grid-cols-12 ">

        <button type="submit" class="rounded-md p-3 bg-red-400 outline-none border-none mt-3 w-full col-span-10 col-start-1 col-end-11 max-h-[80px] text-white">ثبت</button> 
        </div>
</form>
    <br><br><br><br>






</div>
    <?php
        $__scriptKey = '1602648661-0';
        ob_start();
    ?>



<script>
    window.addEventListener('swal',function(e) {
        let params = e.__livewire.params[0]
        Swal.fire({
            title:  params.title ,
            icon: params.icon,
            text:  params.text ,     
    })
    });
 
new TomSelect("#input-tags",{
	persist: false,
	createOnBlur: true,
	create: true
});   </script>



    <?php
        $__output = ob_get_clean();

        \Livewire\store($this)->push('scripts', $__output, $__scriptKey)
    ?>

<?php /**PATH G:\programming\code\liara\resources\views\livewire\cms\article\create-article-category.blade.php ENDPATH**/ ?>