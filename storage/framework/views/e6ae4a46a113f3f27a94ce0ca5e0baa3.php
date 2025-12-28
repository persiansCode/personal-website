<?php $__env->startPush("cdn"); ?>
<link rel="stylesheet" href="<?php echo e(asset("css/cms/cmsFirstPage.css")); ?>">
<?php $__env->stopPush(); ?>
<div class="relative px-2 col-span-12">
    <div class="flex justify-center p-3 w-full  ">
        <button class="btn btn-primary md:hidden  " x-show="!open" @click="open = true"> show menu </button>
    </div>

    <div class="grid grid-cols-12 gap-3">
        <div class="col-span-12  " id="topSectionContainer" >

       <div class="flex flex-col md:flex-row gap-3 m-2">
        <div class="col-span-12 md:col-span-2 w-full  rounded-md  bg-sage dark:bg-light-raisin-black p-2 pr-4 " id="topSection1" >
            <div class="flex items-center justify-between w-full">
                <p class="text-black dark:text-platinum text-sm ">کاربران جنده</p>
                <p class="text-celeste text-xs">1,300</p>
            </div>
            <p class="text-black dark:text-platinum text-right my-1">52,147</p>
            <div class="flex flex-start ">
                <i class="fa fa-bar-chart text-ucla-blue " style="font-size:36px"></i>
            </div>
        </div>
   <div class="col-span-12 md:col-span-2 w-full  rounded-md  bg-sage dark:bg-light-raisin-black p-2 pr-4 " id="topSection1" >
            <div class="flex items-center justify-between w-full">
                <p class="text-black dark:text-platinum text-sm ">کاربران جنده</p>
                <p class="text-celeste text-xs">1,300</p>
            </div>
            <p class="text-black dark:text-platinum text-right my-1">52,147</p>
            <div class="flex flex-start ">
                <i class="fa fa-bar-chart text-ucla-blue " style="font-size:36px"></i>
            </div>
        </div> <div class="col-span-12 md:col-span-2 w-full  rounded-md  bg-sage dark:bg-light-raisin-black p-2 pr-4 " id="topSection1" >
            <div class="flex items-center justify-between w-full">
                <p class="text-black dark:text-platinum text-sm ">کاربران جنده</p>
                <p class="text-celeste text-xs">1,300</p>
            </div>
            <p class="text-black dark:text-platinum text-right my-1">52,147</p>
            <div class="flex flex-start ">
                <i class="fa fa-bar-chart text-ucla-blue " style="font-size:36px"></i>
            </div>
        </div> <div class="col-span-12 md:col-span-2 w-full  rounded-md  bg-sage dark:bg-light-raisin-black p-2 pr-4 " id="topSection1" >
            <div class="flex items-center justify-between w-full">
                <p class="text-black dark:text-platinum text-sm ">کاربران جنده</p>
                <p class="text-celeste text-xs">1,300</p>
            </div>
            <p class="text-black dark:text-platinum text-right my-1">52,147</p>
            <div class="flex flex-start ">
                <i class="fa fa-bar-chart text-ucla-blue " style="font-size:36px"></i>
            </div>
        </div>
      </div>
     </div>
    </div>
    <div class="grid grid-cols-12 gap-3 ">
        <div class="col-span-12 md:col-span-7 p-4 bg-sage dark:bg-light-raisin-black pt-2 rounded-md max-h-[300px]"
           id="chart">
            <p class="  text-black dark:text-platinum px-2"> امار کاربران عضو شده </p>
            <canvas id="myChart"
                class="bg-sage dark:bg-light-raisin-black w-full p-2 rounded-md max-h-[200px]"></canvas>
        </div>
        <div
        id="recentActivity"
            class="col-span-12 md:col-span-3  overflow-y-scroll col-start-3  bg-sage dark:bg-light-raisin-black p-3 rounded-md max-h-[300px]">
            <p class="  text-black dark:text-platinum p-2"> فعالیت های اخیر </p>
            <div
                class="bg-sage p-2 rounded-md w-full my-2 flex justify-start  max-h-[50px]  items-center dark:bg-light-black">
                <div class="rounded-full bg-celeste w-[5px] h-[5px] shrink-0"></div>
                <p class="  text-black dark:text-platinum px-2 text-sm md:text-md"> کاربر جدیدی ب سایت اضافه شد </p>

            </div>
            <div
                class="bg-sage p-2 rounded-md w-full my-2 flex justify-start  max-h-[50px]  items-center dark:bg-light-black">
                <div class="rounded-full bg-celeste w-[5px] h-[5px]  shrink-0"></div>
                <p class="  text-black dark:text-platinum px-2 text-sm md:text-md"> کاربر جدیدی ب سایت اضافه شد </p>

            </div>
            <div
                class="bg-sage p-2 rounded-md w-full my-2 flex justify-start  max-h-[50px]  items-center dark:bg-light-black">
                <div class="rounded-full bg-celeste w-[5px] h-[5px] shrink-0 "></div>
                <p class="  text-black dark:text-platinum px-2 text-sm md:text-md"> کاربر جدیدی ب سایت اضافه شد </p>

            </div>
            <div
                class="bg-sage p-2 rounded-md w-full my-2 flex justify-start max-h-[50px] items-center dark:bg-light-black">
                <div class="rounded-full bg-celeste w-[5px] h-[5px] shrink-0 "></div>
                <p class="  text-black dark:text-platinum px-2 text-sm md:text-md"> کاربر جدیدی ب سایت اضافه شد </p>

            </div>
        </div>

    </div>

    <div class="grid grid-cols-12 mt-3">

        <div class="col-span-12 p-4  bg-sage dark:bg-light-raisin-black pt-2 rounded-md max-h-[300px]"
           id="table">
            <p class="  text-black dark:text-platinum px-2"> مقاله های اضافه شده اخیر </p>
            <div class="bg-sage dark:bg-light-raisin-black p-2 overflow-x-auto  rounded-md max-h-[200px]">
                <table class="min-w-max w-full   text-black dark:text-slate-300 border-separate border-spacing-x-3 border-spacing-y-2">
                    <thead>
                        <tr>
                            <th>شناسه</th>
                            <th>نویسنده</th>
                            <th>عنوان</th>
                            <th>عکس</th>
                            <th>وضعیت</th>
                            <th>تاریخ</th>


                        </tr>
                    </thead>
                    <tbody class="w-full">
                        <tr>
                            <td>
                                <div class="flex justify-center">
                                    <p>#262b45</p>

                                </div>
                            </td>
                            <td>
                                <div class="flex justify-center">

                                    <p>محمدرضا میرزایی</p>
                                </div>
                            </td>
                            </td>
                            <td>
                                <div class="flex justify-center">
                                    <p>چگونه دوست پسر خود را به شوهر تبدیل کنیم</p>

                                </div>
                            </td>

                            <td>
                                <div class="flex justify-center">

                                    <p> fdgdfgdfg</p>
                                </div>
                            </td>
                            <td>
                                <div class="flex justify-center">
                                    <div class="  bg-green-200 w-[60px] h-[30px] rounded-md">
                                        <p class="text-green-400 text-center pt-1">موفق</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="flex justify-center">

                                    <p>1404/12/13</p>
                                </div>
                            </td>
                            <td>


                        </tr>
                    </tbody>
                </table>


            </div>
        </div>
    </div>
</div>
<?php $__env->startPush("script"); ?>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        let ctx = document.getElementById('myChart').getContext('2d');
        console.log()
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: { beginAtZero: true }
                }
            }
        });
    });
</script>
<?php $__env->stopPush(); ?><?php /**PATH G:\programming\code\liara\resources\views\livewire\cms\cms-first-page.blade.php ENDPATH**/ ?>