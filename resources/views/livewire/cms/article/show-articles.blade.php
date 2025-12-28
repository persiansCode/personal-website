
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
                <th class="py-2">عکس مقاله </th>
                
                <th class="py-2">نویسنده</th>
                <th class="py-2">عنوان</th>
                <th class="py-2">وضعیت</th>
                <th class="py-2 ">تایید شده توسط</th>
                <th class="py-2 rounded-tl-md"> تنظیمات </th>
            </tr>
        </thead>
        <tbody class="text-white">
            @foreach ($items as $item)
                <tr class="p-2">
                    <td class="p-2 text-center rounded-br-md">{{ $item->id }}</td>

                    <td>
                        <div class="flex justify-center">

                   
                             @if (file_exists(public_path($item->image['indexArray']['small'])))
                           <img src="{{ asset($item->image['indexArray']['small']) }}"alt=""
                            class="w-[30px] h-[30px] rounded-full object-cover" /> 
                            @else
                            <img src="{{ asset('files/profile.jpg') }}" alt=""
                            class="w-[30px] h-[30px] rounded-full object-cover" /> 
                        @endif     </div>
                    </td>
                    <td class="flex items-center p-2 justify-center gap-2">
                 
      
                 
                 
                            <img src="{{ asset('files/profile.jpg') }}" alt=""
                            class="w-[30px] h-[30px] rounded-full object-cover" /> 
                      
                        

                        <p class="text-center"> {{ $item->arthor->fullName() ?? '-'}} </p>
                    </td>
                    <td class="px-5">
                        <p class="text-center"> {{ $item->title ?? '-' }} </p>
                    </td>
                    <td>
                        <div class="flex items-end justify-center px-auto gap-2 ">
                            <div class="w-[3px] h-[3px] self-center rounded-full bg-green-400"></div>
                            <p class="self-start text-center">منتشر شده</p>
                        </div>



                    </td>
                    <td class="">
                        <p class="text-center">محمدرضا میرزایی</p>
                    </td>
                     <td class="">
                        <div class="rounded-bl-md flex gap-2 justify-center items-center h-full">
                            <a href="{{route('edit-article' , $item->id)}}" class="p-2 rounded-sm bg-orange-400 flex items-center justify-center  "><i
                                    class="fa fa-edit text-[18px]"></i></a>
                            <p class="p-2 rounded-sm bg-red-400 flex items-center justify-center "><i
                                    class="fa fa-trash text-[18px]"></i> </p>


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
