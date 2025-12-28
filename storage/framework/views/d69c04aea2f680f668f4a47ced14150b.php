<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="light" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link type="text/css" rel="stylesheet" href="jalalidatepicker.min.css" />
<script type="text/javascript" src="jalalidatepicker.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
        <title><?php echo e($title ?? 'Page Title'); ?></title>
         <?php echo $__env->yieldPushContent("css"); ?>
        <style>


            .container {
  max-width: 2000px;
  margin: 0 auto;
}

        </style>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    </head>

    <body id="body" class=" light bg-platinum dark:bg-raisin-black min-h-[100vh] ">    <!-- تاگل -->
<?php echo $__env->make('sweetalert2::index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
         <h1 class="text-yellow-800 ">hi</h1>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('header', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-526510810-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <div class="container mx-auto max-w-[1200px] ">
        <?php echo e($slot); ?>

        </div>
          <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('footer', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-526510810-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

    </body>
</html>
<?php /**PATH G:\programming\code\liara\resources\views/components/layouts/app.blade.php ENDPATH**/ ?>