<div class="pt-16 px-2">
    <div class="grid grid-cols-12 gap-4 grid-flow-row">
        <div class="col-span-12  md:col-span-7 owerflow-hidden pb-5 md:col-start-2 " style="height: fit-content;" >
            <div class="h-[40%] mt-2">
                    <?php if(file_exists(public_path($article->image['indexArray']['small']))): ?>
                           <img src="<?php echo e(asset($article->image['indexArray']['large'])); ?>"alt=""
                            class="w-full h-full object-cover" /> 
                            <?php else: ?>
                            <img src="<?php echo e(asset('files/profile.jpg')); ?>" alt=""
                            class="w-full h-full object-cover" /> 
                        <?php endif; ?>
            </div>
            <div
                class="flex gap-3 mt-4 border-b-[0.7px] border-b-powder-blue pb-4"
                dir="rtl"
            >
                <div class="">
                    <div class="flex gap-2">
                        <i
                            class="fa fa-user  text-black dark:text-white"
                            style="font-size: 18px"
                        ></i>
                        <p class=" text-black dark:text-white">نویسنده :  <?php echo e($article->arthor->fullName()); ?></p>
                    </div>
                </div>
                <div class="">
                    <div class="flex gap-2">
                        <i
                            class="fa fa-calendar  text-black dark:text-white"
                            style="font-size: 18px"
                        ></i>
                        <?php
                        $persianDate = \Morilog\Jalali\Jalalian::fromDateTime( $article->date );

                        ?>
                        <p class=" text-black dark:text-white"  style="direction: rtl; unicode-bidi: plaintext;"
>تاریخ :   <?php echo e($persianDate); ?></p>
                    </div>
                </div>
            </div>
            <div class="py-2" dir="rtl">
                <div class="relative">
                    <h1 class="text-powder-blue p-4">
                     <?php echo e($article->title ?? '-'); ?>

                    </h1>

                    <p class="text-base text-gray-800 dark:text-powder-blue">
                     <?php echo e($article->description ??'-'); ?>

                    </p>
                </div>
              
            </div>
        </div>
        <div class="col-span-12  md:col-span-3 z-2 mr-3 " >
            <div
                class="p-2 m-2 rounded-md w-full border-2  border-sage dark:border-powder-blue"
                dir="rtl"
            >
                <h2 class=" text-black dark:text-white p-2">تگ های محبوب</h2>
                <div class="flex gap-2 flex-wrap">
                    <?php $__empty_1 = true; $__currentLoopData = explode(',' , $article->tags); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <p
                        class="flex gap-2  text-black dark:text-white rounded-sm cursor-pointer p-1 border-[.7px]  border-sage dark:border-powder-blue"
                    >
                        #<?php echo e($tag); ?>

                    </p>
                
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <p>تگی یافت نشد</p>
                    <?php endif; ?>
                  
                </div>
            </div>
            <div
                class="p-2 m-2 rounded-md w-full border-2  border-sage dark:border-powder-blue"
                dir="rtl"
            >
                <h2 class=" text-black dark:text-white">مقاله های مرتبط</h2>
                <?php if($categoryArticles): ?>
                     <?php $__currentLoopData = $categoryArticles->articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="flex gap-2 flex-wrap">
                    <div class="p-1 rounded-md w-full">
                        <div
                            class="w-full rounded-sm border-[.7px]  border-sage dark:border-powder-blue h-[40px] relative"
                        >
                            <div
                                class="absolute h-[40px] rounded-tr-sm rounded-br-sm top-[-1px] w-[8px] bg-sage dark:bg-ucla-blue right-[-2px]"
                            ></div>
                            <a href="<?php echo e(route("read-post" , $item->id )); ?>" class=""> 
                                <p class=" text-black dark:text-white mt-2  mr-4"> <?php echo e($item->title); ?></p>
                          
                          </a>
                        </div>
                    </div>
                </div>
          
                 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php else: ?>
                 <p>مقاله مرتبطی یافت نشد</p>
                <?php endif; ?>
           
              
            </div>
            <div
                class="p-2 m-2 rounded-md w-full border-2  border-sage dark:border-powder-blue"
                dir="rtl"
            >
                <div class="flex items-center justify-center gap-4">
                    <div class="w-[50px] h-[50px] rounded-full">
                        <img src="<?php echo e(asset("files/profile.jpg")); ?>" alt=""
                        class="h-full w-full rounded-full object-cover">
                    </div>
                    <div class="">
                        <p class=" text-black dark:text-white text-md"> <?php echo e($article->arthor->fullName()); ?>  </p>
                    </div>
                </div>
                <div class="text-center text-sm  text-black dark:text-white p-2" dir="ltr">
                    برنامه نویس فول استک لاراول

                 
                </div>
                <button

                    class="rounded-md border-none py-3 outline-none text-gray-800 dark:text-platinum bg-sage dark:bg-powder-blue w-full my-[.5rem]"
                ><a  href="<?php echo e(route("resume")); ?>">
                    دیدن کامل رزومه
                </a>
                    
                </button>
            </div>
        </div>
    </div>
</div>
<?php /**PATH G:\programming\code\liara\resources\views\livewire\read-post.blade.php ENDPATH**/ ?>