<?php $__env->startPush("css"); ?>
<link rel="stylesheet" href="<?php echo e(asset("css/firstPage/style.css")); ?>">

<?php $__env->stopPush(); ?>
<div class="" dir="rtl">
 <!-- #region -->
  
<div class="grid grid-cols-12 place-items-center pt-18  px-[100px]">


   <div class="col-span-12 md:grid md:col-span-6 ">
        <img src="<?php echo e(asset("files/profile.jpg")); ?>" alt="" class="ink-blob-image ">
        <!-- #region --></div>
  <div class="col-span-12 md:col-span-6">
    <h1 class=" bg-gradient-to-r dark:from-teal-400 dark:to-yellow-200 bg-clip-text text-transparent  text-[40px] text-center 100vh
     from-amber-500 to-pink-500  transition-transform duration-500 hover:scale-125
    ">خوش امدید!</h1>
      <h3 id="typewriter" class=" text-center bg-gradient-to-r  from-amber-500 to-pink-500 text-[30px] bg-clip-text text-transparent  "></h3>


  </div>
</div>


   <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('introduction', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-2990045999-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>  <div class="  border-b-[0.8px] mx-[10%] border-b-slate-400">
 <h2 class="bg-gradient-to-r from-indigo-400 to-cyan-400 bg-clip-text text-transparent text-[30px] w-[150px] mt-[3px] border-b-[3.8px]   border-b-orange-400
   " dir="rtl">توضیحات</h2>
   </div>
  <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('second-page', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-2990045999-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

</div>
    <?php
        $__scriptKey = '2990045999-0';
        ob_start();
    ?>



<script>
    window.addEventListener('swal',function(e) {
        let params = e.__livewire.params[0]
        Swal.fire({
            title:  params.title ,
            icon: params.icon,
            text:  params.text ,
            timer: 3000,
    })
      
    });
</script>
<script>

    const app = document.getElementById("typewriter")


var customNodeCreator = function(character) {
  return document.createTextNode(character);
}

var typewriter = new Typewriter(app, {
  loop: true,
  delay: 200,
  deleteSpeed:200,
  onCreateTextNode: customNodeCreator,
});

typewriter
  .typeString('من محمدرضا میرزایی هستم' )
  .pauseFor(300).deleteAll()
  .typeString("برنامه نویس فول استک لاراول").pauseFor(300).start();
</script>

    <?php
        $__output = ob_get_clean();

        \Livewire\store($this)->push('scripts', $__output, $__scriptKey)
    ?>
<?php /**PATH E:\programming\code\myProject\resources\views/livewire/first-page.blade.php ENDPATH**/ ?>