<?php $__env->startPush('css'); ?>
<style>
 .accoedianTitle::after{
 content: " ";
 position: absolute;
 bottom: 0;
 right: 0;
 left: 0;
 display: block;
 height: 10px;
 width: calc(100% + 6px);
 background-color: #1eb35b40;
 -webkit-clip-path: polygon(6px 0, 100% 0, 100% 100%, 0 100%);
 clip-path: polygon(6px 0, 100% 0, 100% 100%, 0 100%);
 z-index: 5;
}
</style>
<?php $__env->stopPush(); ?>

<div class="pt-22 px-5 pb-22">

    <div class="grid grid-cols-12 gap-3 " dir="ltr">

        <div class="col-span-12 md:col-span-3  rounded-md">
            
             
        <?php if (isset($component)) { $__componentOriginal3afafe6cbffb4845da0369908a23572e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3afafe6cbffb4845da0369908a23572e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.posts-page.accordian.accordian','data' => ['categoris' => $categoryArticles,'articles' => $articles]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('posts-page.accordian.accordian'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['categoris' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($categoryArticles),'articles' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($articles)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3afafe6cbffb4845da0369908a23572e)): ?>
<?php $attributes = $__attributesOriginal3afafe6cbffb4845da0369908a23572e; ?>
<?php unset($__attributesOriginal3afafe6cbffb4845da0369908a23572e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3afafe6cbffb4845da0369908a23572e)): ?>
<?php $component = $__componentOriginal3afafe6cbffb4845da0369908a23572e; ?>
<?php unset($__componentOriginal3afafe6cbffb4845da0369908a23572e); ?>
<?php endif; ?>
    
     
       

        </div>
    
               <div class="col-span-12 md:col-span-9 row-start-1 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="bg-slate-200 dark:bg-gray-700 rounded-md min-h-[22rem] self-start">
        <div class="w-full">
          <?php if(File::exists(public_path($article->image['indexArray']['medium']))): ?>
            <img src="<?php echo e(asset($article->image['indexArray']['medium'])); ?>" alt="react" class="rounded-md">
          <?php else: ?>
            <img src="<?php echo e(asset('files/react.webp')); ?>" alt="react" class="rounded-md">
          <?php endif; ?>

          <div class="p-2" dir="rtl">
            <h5 class="text-paney-gray dark:text-paney-gray"><?php echo e($article->title); ?></h5>
            <p class="text-paney-gray dark:text-platinum text-sm"><?php echo e(\Str::limit($article->description, 100)); ?></p>
            <a href="<?php echo e(route("read-post" , $article->id)); ?>" class="btn w-full mt-3 border-none outline-none  bg-sage dark:bg-celeste text-black">دیدن کامل پست</a>
          </div>
        </div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <!-- صفحه‌بندی -->
    <div class="col-span-full pt-3">
      <?php echo e($articles->links('pagination::tailwind')); ?>

    </div>
  </div>

</div>


    
      
    </div>  
   
    
      
    
</div>
<?php /**PATH G:\programming\code\liara\resources\views\livewire\posts-page.blade.php ENDPATH**/ ?>