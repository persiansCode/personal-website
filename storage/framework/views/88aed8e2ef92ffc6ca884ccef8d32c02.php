
<div class=" backdrop-blur-[2px]  bg-cover z-[100] text-amber-300 rounded-b-sm fixed top-0 flex items-center w-full justify-between
 py-6 px-3 max-h-18 border-b-slate-400 border-b-[0.8px] " >
    <label class="toggle text-base-content">
        <input type="checkbox"  class="" id="checkbox" wire:click="$js.checkbox"/>
        <?php echo file_get_contents(public_path('files/sun.svg')); ?>

        <?php echo file_get_contents(public_path('files/moon.svg')); ?>






      </label>

      <div class="flex items-center gap-3 ">
      
        <a href="https://mohammadrezamirzaei.liara.run/" class="text-black dark:text-celeste">صفحه اصلی</a>
        <a href="https://mohammadrezamirzaei.liara.run/posts" class="text-black dark:text-celeste">مقاله ها</a>

        <a href="https://mohammadrezamirzaei.liara.run/contact-with-us"  class="text-black dark:text-celeste"> تماس  بامن</a>
  <a href="https://mohammadrezamirzaei.liara.run/login" class=" bg-[#d9c5a1] dark:bg-[#60b5ac] text-white items-center gap-3 my-1 p-3 rounded-md flex">
    
        <p class="text-sm" > ورود / ثبت نام </p>
<i class='fa fa-sign-out ' style="font-size: 14px;" ></i>
        </a>
      </div>
</div>

    <?php
        $__scriptKey = '2903989107-0';
        ob_start();
    ?>
<script>
    let element =  document.getElementById("body")
    let checkbox =  document.getElementById("checkbox")

    if(checkbox.checked){
    element.classList.replace('light' , 'dark')
   }

    $js('checkbox', () => {

   if(checkbox.checked){
    element.classList.replace('light' , 'dark')
   }
   else{
        element.classList.replace('dark' , 'light')
 } })

</script>
    <?php
        $__output = ob_get_clean();

        \Livewire\store($this)->push('scripts', $__output, $__scriptKey)
    ?>




<?php /**PATH G:\programming\code\liara\resources\views/livewire/header.blade.php ENDPATH**/ ?>