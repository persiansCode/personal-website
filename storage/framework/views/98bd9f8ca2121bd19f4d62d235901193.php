
   <?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['categoris' => "" , 'articles' => "" ] ));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['categoris' => "" , 'articles' => "" ] ), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<div class="my-2" dir="rtl">
   <div class="">
    <p class="accoedianTitle relative mb-4 p-3 text-black dark:text-white"> دسته بندی مقالات</p>
   
   </div>

    <div class="space-y-2">
      <?php $__currentLoopData = $categoris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div x-data="{ open: false }" class="bg-gray-100 bg-sage dark:bg-gray-800 rounded-md">
          <div @click="open = !open" class="cursor-pointer p-3 flex justify-between items-center">
            <span class="text-black dark:text-white"><?php echo e($category['name']); ?></span>
            <i class="fa fa-chevron-left transition-transform duration-300 text-black dark:text-white" :class="open ? 'rotate-[-90deg]' : ''"></i>
          </div>
          <div x-show="open" x-transition class="p-3 flex flex-col">
            <?php $__empty_1 = true; $__currentLoopData = $category['articles']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
      
              <a href="<?php echo e(route("read-post" , $category['articles'][$key]['id'])); ?> " class="bg-gray-700 my-1 p-2 w-full rounded-md text-black dark:text-white"><?php echo e($item['title']); ?></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
              <p>هیچ آیتمی پیدا نشد.</p>
            <?php endif; ?>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>


</div>
<?php /**PATH G:\programming\code\liara\resources\views\components\posts-page\accordian\accordian.blade.php ENDPATH**/ ?>