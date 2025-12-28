   <?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title' => "" , 'description' => "" , 'name' => "" ] ));

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

foreach (array_filter((['title' => "" , 'description' => "" , 'name' => "" ] ), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
   <div class="flex flex-col my-4 items-start p-2 rounded-md w-full bg-[#d9c5a1] dark:bg-[#222222] ">
                <p class="text-gray-600 dark:text-gray-400 text-right mb-4  text-sm" dir="rtl"> <?php echo e($title); ?> </p>
                <input type="text" 
                wire:model.lazy="<?php echo e($name); ?>"
                placeholder="<?php echo e($description); ?>"
                class="w-full rounded-md p-1 placeholder-white border-0 text-sm bg-[#d9c5a1] dark:bg-[#222222]"
            
            >
            </div><?php /**PATH G:\programming\code\liara\resources\views\components\auth\register\input.blade.php ENDPATH**/ ?>