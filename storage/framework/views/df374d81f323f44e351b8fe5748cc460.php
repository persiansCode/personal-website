
<?php $__env->startPush('cdn'); ?>



<link rel="stylesheet" href="<?php echo e(asset("css/cms/showArticleCategory.css")); ?>" >

<?php $__env->stopPush(); ?>
<div class="pt-18 col-span-10 px-9" dir="rtl">


    <div class="pt-18  col-span-10 text-orange-400 px-2" >
    <div class="" >



        <div class=" text-orange-400  ">
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
    <table class="w-full mt-10 border border-gray-500  rounded-md" style="border-collapse: separate;border-spacing:0px;">
        <thead class="text-white  p-4 ">
            <tr class=" bg-sage dark:bg-[#2b3046] rounded-md">
                <th class="py-2 rounded-tr-md">#</th>
                <th class="py-2">اسم</th>
                <th class="py-2">توضیحات</th>
                <th class="py-2">اسلاگ</th>
                <th class="py-2 "> وضعیت </th>
                <th class="py-2 "> تگ ها </th>
                <th class="py-2 ">  عکس </th>

                <th class="py-2 rounded-tl-md"> تنظیمات </th>
            </tr>
        </thead>
        <tbody class="text-slate-800 dark:text-white">
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
             
                <tr class="p-2">    <td class="p-2 text-center rounded-br-md"><?php echo e($item->id); ?></td>
                        <td class="px-5">
                        <p class="text-center"> <?php echo e($item->name ?? '-'); ?> </p>
                    </td>
             
                
               
                    <td>
                        <div class="flex items-end justify-center px-auto gap-2 ">
                           
                            <p class="self-start text-center"> <?php echo e($item->description ?? "-"); ?> </p>
                        </div>



                    </td>
                    <td class="">
                        <p class="text-center"> <?php echo e($item->slug ?? "-"); ?>  </p>
                    </td>
    <td class="">
                        <p class="text-center"> <?php echo e($item->status ?? "-"); ?>  </p>
                    </td>
    <td class="">

                        <p class="text-center"> <?php echo e($item->tags ?? "-"); ?>  </p>
                    </td>  
                    
                    <td class="">
                        <div class="flex items-center p-2 justify-center gap-2">
                         
                        <?php if(file_exists(public_path($item->image['small']))): ?>
                           <img src="<?php echo e(asset($item->image['small'])); ?>"alt=""
                            class="w-[30px] h-[30px] rounded-full object-cover" /> 
                            <?php else: ?>
                            <img src="<?php echo e(asset('files/profile.jpg')); ?>" alt=""
                            class="w-[30px] h-[30px] rounded-full object-cover" /> 
                        <?php endif; ?>
                        </div>

                    
                    </td>
                           
                    <td class="">
                        <div class="rounded-bl-md flex gap-2 justify-center items-center h-full">
                            <a href="<?php echo e(route('edit-category-article' , $item->id)); ?>" class="p-2 rounded-sm bg-orange-400 flex items-center justify-center  "><i
                                    class="fa fa-edit text-[18px]"></i></a>
                            <p class="p-2 rounded-sm bg-red-400 flex items-center justify-center "><i
                                    class="fa fa-trash text-[18px]"></i> </p>


                        </div>


                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        </tbody>
    </table> 
       <div class="w-full my-10 flex justify-center">
        <?php echo e($items->links('pagination::tailwind')); ?>

       </div>
</div>

    <?php
        $__scriptKey = '185423615-0';
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
 
</script>

    <?php
        $__output = ob_get_clean();

        \Livewire\store($this)->push('scripts', $__output, $__scriptKey)
    ?>

<?php /**PATH G:\programming\code\liara\resources\views\livewire\cms\article\show-article-category.blade.php ENDPATH**/ ?>