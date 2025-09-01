<!-- <div class="relative px-2 pt-18 col-span-2 z-[100]"  >

    <div  x-data="{ open: true }" @mouseleave="open = false" @mouseenter="open = true" class="absolute group gap-2 flex flex-col justify-start items-center text-celeste absolute right-0 bg-[#475594] h-[100vh] w-[60px] hover:w-[100%] transition-all duration-300">
        <div class="py-1 pl-3 flex items-center gap-2  ">
            <i class="fa text-black fa-newspaper-o mx-2"></i>
            <p   class="text-black ">پست ها</p>
        </div>
        <div class="py-1 pl-3 flex items-center gap-2" >
            <i class="fa text-black fa-newspaper-o mx-2"></i>
            <p   class="text-black ">پست ها</p>
        </div>  <div class="py-1 pl-3 flex items-center gap-2" >
            <i class="fa text-black fa-newspaper-o mx-2"></i>
            <p   class="text-black ">پست ها</p>
        </div>  <div class="py-1 pl-3 flex items-center gap-2" >
            <i class="fa text-black fa-newspaper-o mx-2"></i>
            <p   class="text-black ">پست ها</p>
        </div>
    </div>


</div> -->
<div 
x-bind:class="open ? 'col-span-12 md:col-span-2 pt-18 transition-all duration-300 w-full ' : ' hidden md:grid  md:col-span-2 pt-18  ' "
class="relative px-2 pt-18  z-[100]">

    <div
        class="absolute top-18 group gap-2 flex flex-col pt-2 justify-start items-center  absolute right-0  bg-sage dark:bg-[#2b3046] min-h-[140vh] md:min-h-[100vh] w-full">
        <div class="absolute  top-[25px] right-[25px] pt-3 w-[90%]">
            <div class="flex justify-between w-full">

            
            <div class="flex items-center gap-3">
                <div class="w-[35px] h-[35px] rounded-lg bg-powder-blue"></div>
                <h2 class=" text-black dark:text-platinum">پنل مدیریت</h2>
            </div>
            <div class="" >
                <button class="btn bg-red-400 rounded-md p-2 md:hidden " x-show="open" @click="open = false"> <i class="fa fa-close"  style="font-size:24px"></i></button>
            </div>
           </div>
        </div>
        <div class="absolute top-[80px] right-[10px] w-full pl-[20px]">

            <div
                class=" p-2 my-2  hover:border-[.7px] hover:border-powder-blue rounded-md w-full flex items-center gap-2  ">
                <div class="bg-sage dark:bg-[#262b45] p-2 rounded-md">


                    <i class="fa text-powder-blue fa-newspaper-o mx-2 "></i>
                </div>
                <p class=" text-black dark:text-platinum ">پست ها</p>
            </div>
            <div
                class=" p-2 my-2  hover:border-[.7px] hover:border-powder-blue rounded-md w-full flex items-center gap-2  ">
                <div class="bg-sage dark:bg-[#262b45] p-2 rounded-md">


                    <i class="fa text-powder-blue fa-newspaper-o mx-2 "></i>
                </div>
                <p class=" text-black dark:text-platinum ">پست ها</p>
            </div>
            <div
                class=" p-2 my-2  hover:border-[.7px] hover:border-powder-blue rounded-md w-full flex items-center gap-2  ">
                <div class="bg-sage dark:bg-[#262b45] p-2 rounded-md">


                    <i class="fa text-powder-blue fa-newspaper-o mx-2 "></i>
                </div>
                <p class=" text-black dark:text-platinum ">پست ها</p>
            </div>
            <div
                class=" p-2 my-2  hover:border-[.7px] hover:border-powder-blue rounded-md w-full flex items-center gap-2  ">
                <div class="bg-sage dark:bg-[#262b45] p-2 rounded-md">


                    <i class="fa text-powder-blue fa-newspaper-o mx-2 "></i>
                </div>
                <p class=" text-black dark:text-platinum ">پست ها</p>
            </div>
        </div>
    </div>


</div>