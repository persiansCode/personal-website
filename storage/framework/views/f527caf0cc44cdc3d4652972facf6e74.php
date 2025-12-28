<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="light" >
    <head>
      <!-- در بخش head -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />



        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <link rel="stylesheet" href="<?php echo e(asset("admin-assets/select2/css/select2.min.css")); ?>"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <?php echo app('Illuminate\Foundation\Vite')(  'resources/css/app.css' ); ?>
        <?php echo app('Illuminate\Foundation\Vite')(  'resources/js/app.js' ); ?>

        <title><?php echo e($title ?? 'Page Title'); ?></title>
    
        <style>




            .container {
  max-width: 2000px;
  margin: 0 auto;
}

        </style>


         <?php echo $__env->yieldPushContent('cdn'); ?>
    </head>

    <body id="body" class=" light bg-platinum dark:bg-raisin-black min-h-[100vh] " x-data="{open : true}">    <!-- تاگل -->


         <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('cms.cms-header', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-198026449-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

        <div class="container mx-auto max-w-[1200px] relative grid grid-cols-12" dir="rtl">
            <?php if (isset($component)) { $__componentOriginalb1b981a7af9075006407c072f38c0534 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb1b981a7af9075006407c072f38c0534 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cms.sidebar.sidebar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cms.sidebar.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb1b981a7af9075006407c072f38c0534)): ?>
<?php $attributes = $__attributesOriginalb1b981a7af9075006407c072f38c0534; ?>
<?php unset($__attributesOriginalb1b981a7af9075006407c072f38c0534); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb1b981a7af9075006407c072f38c0534)): ?>
<?php $component = $__componentOriginalb1b981a7af9075006407c072f38c0534; ?>
<?php unset($__componentOriginalb1b981a7af9075006407c072f38c0534); ?>
<?php endif; ?>
        <?php echo e($slot); ?>

        </div>
          <!-- <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('footer', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-198026449-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?> -->

<!-- <script src="<?php echo e(asset("admin-assets/select2/js/select2.min.js")); ?>"> -->
        
      </script>
      <?php echo $__env->yieldPushContent("script"); ?>
    </body>
   
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
   
</script>

    
</html>
<?php /**PATH G:\programming\code\liara\resources\views\components\layouts\cms.blade.php ENDPATH**/ ?>