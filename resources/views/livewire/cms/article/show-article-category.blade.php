
@push('cdn')



<link rel="stylesheet" href="{{ asset("css/cms/showArticleCategory.css") }}" >

@endpush
<div class="pt-18 col-span-10 px-9" dir="rtl">


    <div class="pt-18  col-span-10 text-orange-400 px-2" >
    <div class="" >



        <div class=" text-orange-400  ">
             <div class=" flex justify-between p-4 ">
        <h3 class="relative text-slate-800 dark:text-slate-200 createArticleTitle" id="createArticleTitle">
            <a href="https://mohammadrezamirzaei.liara.run/cms/articles/create-category-articles">
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
            <tr class=" bg-sage dark:bg-[#2b3046] rounded-md">
                <th class="py-2 rounded-tr-md">#</th>
                <th class="py-2">اسم</th>
                <th class="py-2">توضیحات</th>
                <th class="py-2">اسلاگ</th>
                <th class="py-2 "> وضعیت </th>
                <th class="py-2 "> تگ ها </th>
                <th class="py-2 ">  عکس </th>

                <th class="py-2 rounded-tl-md"> تنظیمات </th>
            </tr>
        </thead>
        <tbody class="text-slate-800 dark:text-white">
            @foreach ($items as $item)   
             
                <tr class="p-2">    <td class="p-2 text-center rounded-br-md">{{ $item->id }}</td>
                        <td class="px-5">
                        <p class="text-center"> {{ $item->name ?? '-' }} </p>
                    </td>
             
                
               
                    <td>
                        <div class="flex items-end justify-center px-auto gap-2 ">
                           
                            <p class="self-start text-center"> {{$item->description ?? "-"}} </p>
                        </div>



                    </td>
                    <td class="">
                        <p class="text-center"> {{$item->slug ?? "-"}}  </p>
                    </td>
    <td class="">
                        <p class="text-center"> {{$item->status ?? "-"}}  </p>
                    </td>
    <td class="">

                        <p class="text-center"> {{$item->tags ?? "-"}}  </p>
                    </td>  
                    
                    <td class="">
                        <div class="flex items-center p-2 justify-center gap-2">
                         
                        @if (file_exists(public_path($item->image['small'])))
                           <img src="{{ asset($item->image['small']) }}"alt=""
                            class="w-[30px] h-[30px] rounded-full object-cover" /> 
                            @else
                            <img src="{{ asset('files/profile.jpg') }}" alt=""
                            class="w-[30px] h-[30px] rounded-full object-cover" /> 
                        @endif
                        </div>

                    
                    </td>
                           
                    <td class="">
                        <div class="rounded-bl-md flex gap-2 justify-center items-center h-full">
                            <a href="{{route('edit-category-article' , $item->id)}}" class="p-2 rounded-sm bg-orange-400 flex items-center justify-center  "><i
                                    class="fa fa-edit text-[18px]"></i></a>
                            <p class="p-2 rounded-sm bg-red-400 flex items-center justify-center "><i
                                    class="fa fa-trash text-[18px]"></i> </p>


                        </div>


                    </td>
                </tr>
            @endforeach
        
        </tbody>
    </table> 
       <div class="w-full my-10 flex justify-center">
        {{  $items->links('pagination::tailwind')}}
       </div>
</div>

@script



<script>
    window.addEventListener('swal',function(e) {
        let params = e.__livewire.params[0]
        Swal.fire({
            title:  params.title ,
            icon: params.icon,
            text:  params.text ,     
    })
    });
 
</script>

@endscript

