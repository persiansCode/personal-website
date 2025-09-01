<div class="pt-18 col-span-10 px-9" dir="rtl">
    <table class="w-full mt-10 border border-gray-500  rounded-md" style="border-collapse: separate;border-spacing:0px;">
        <thead class="text-white  p-4 ">
            <tr class="bg-delft-blue rounded-md">
                <th class="py-2 rounded-tr-md">#</th>
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
                    <td class="flex items-center p-2 justify-center gap-2">
                        @if (file_exists(public_path("{{ $item->image }}")))
                           <img src="{{ asset(" $item->image ") }}" alt=""
                            class="w-[30px] h-[30px] rounded-full object-cover" /> 
                            @else
                            <img src="{{ asset('files/profile.jpg') }}" alt=""
                            class="w-[30px] h-[30px] rounded-full object-cover" /> 
                        @endif
                        

                        <p class="text-center"> {{ $item->arthor ?? '-'}} </p>
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
                            <p class="p-2 rounded-sm bg-orange-400 flex items-center justify-center  "><i
                                    class="fa fa-edit text-[18px]"></i></p>
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
