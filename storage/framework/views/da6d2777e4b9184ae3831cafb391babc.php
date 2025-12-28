<div class=" backdrop-blur-[10px]  bg-cover z-[200] text-amber-300 rounded-b-sm fixed top-0 flex items-center w-full justify-between
 py-6 px-3 max-h-18 border-b-slate-400 border-b-[0.8px] ">
  <label class="toggle text-base-content">
    <input type="checkbox" checked class="" id="checkbox" wire:click="$js.checkbox" />
    <?php echo file_get_contents(public_path('files/sun.svg')); ?>

    <?php echo file_get_contents(public_path('files/moon.svg')); ?>






  </label>

  <div class="flex gap-3" dir="rtl">

    <img src="<?php echo e(asset('files/profile.jpg')); ?>" alt="" class="w-[50px] h-[50px] rounded-full object-cover">
    <div class="text-slate-800 dark:text-platinum">
      <p>محمدرضا میرزایی</p>
      <p>برنامه نویس لاراول</p>
    </div>
  </div>

</div>

    <?php
        $__scriptKey = '1361233617-0';
        ob_start();
    ?>
<script>
  let element = document.getElementById("body")
  let checkbox = document.getElementById("checkbox")

  if (checkbox.checked) {
    element.classList.replace('light', 'dark')
  }

  $js('checkbox', () => {

    if (checkbox.checked) {
      element.classList.replace('light', 'dark')
    }
    else {
      element.classList.replace('dark', 'light')
    }
  })

</script>
    <?php
        $__output = ob_get_clean();

        \Livewire\store($this)->push('scripts', $__output, $__scriptKey)
    ?><?php /**PATH G:\programming\code\liara\resources\views\livewire\cms\cms-header.blade.php ENDPATH**/ ?>