
@push('cdn')



<link rel="stylesheet" href="{{ asset("css/cms/showArticleCategory.css") }}" >

@endpush
<div class="pt-18 col-span-10 px-9" dir="rtl">

    <div class="" >



        <div class=" text-orange-400 pt-8 ">
             <div class=" flex justify-between p-4 ">
        <h3 class="relative text-slate-800 dark:text-slate-200 createArticleTitle" id="createArticleTitle">
            <a href="https://mohammadrezamirzaei.liara.run/cms/article/create">
            ساختن مقاله جدید</a>
        </h3>
        <button class="rounded-md outline-none border-none bg-sage  dark:bg-[#2b3046] text-slate-800 dark:text-slate-200 p-2">
            برگشتن به صفحه اصلی
        </button>
    </div>
        </div>
    </div>

    <table class="w-full mt-10 border border-gray-500  rounded-md" style="border-collapse: separate;border-spacing:0px;">
        <thead class="text-white  p-4 ">
            <tr class="bg-delft-blue rounded-md">
                <th class="py-2 rounded-tr-md">#</th>
             
                
                <th class="py-2">نام </th>
                <th class="py-2">نام خانوادگی</th>
                <th class="py-2">ایمیل</th>
                <th class="py-2 ">متن پیغام</th>
                <th class="py-2 rounded-tl-md"> تنظیمات </th>
            </tr>
        </thead>
        <tbody class="text-white">
            @foreach ($items as $item)
                <tr class="p-2 m-2">
                        <td>
                        <p class="px-4">
                        {{$item->id . "        " ?? "-"}}
                        </p>
                     </td>
                     <td>
                        <p>
                        {{$item->first_name?? "-"}}
                        </p>
                     </td>
                         <td>
                        <p>
                        {{$item->last_name?? "-"}}
                        </p>
                     </td>
                         <td>
                        <p>
                        {{$item->email?? "-"}}
                        </p>
                     </td>
                         <td>
                        <p>
                        {{$item->mesaage?? "-"}}
                        </p>
                     </td>
                     <td class="">
                        <div class="rounded-bl-md flex gap-1 space-y-1 justify-center items-center h-full">
                            <a href="{{route('edit-article' , $item->id)}}" class="p-2 rounded-sm bg-orange-400 flex items-center justify-center  "><i
                                    class="fa fa-edit text-[18px]"></i></a>
                                              <a href="{{route('edit-article' , $item->id)}}" class="p-2 rounded-sm flex items-center justify-center  ">
                            <p class="p-2 rounded-sm bg-red-400 flex items-center justify-center "><i
                                    class="fa fa-trash text-[18px]"></i> </p>
                                              </a>

                        </div>


                    </td>
                </tr>
            @endforeach
        
        </tbody>
    </table> 
       <div class="w-full mt-10 flex justify-center">
        {{  $items->links('pagination::tailwind')}}
       </div>
</div>
