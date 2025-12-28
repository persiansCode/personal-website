
   @props(['categoris' => "" , 'articles' => "" ] )
<div class="my-2" dir="rtl">
   <div class="">
    <p class="accoedianTitle relative mb-4 p-3 text-black dark:text-white"> دسته بندی مقالات</p>
   
   </div>

    <div class="space-y-2">
      @foreach($categoris as $key => $category)
        <div x-data="{ open: false }" class="bg-gray-100 bg-sage dark:bg-gray-800 rounded-md">
          <div @click="open = !open" class="cursor-pointer p-3 flex justify-between items-center">
            <span class="text-black dark:text-white">{{ $category['name'] }}</span>
            <i class="fa fa-chevron-left transition-transform duration-300 text-black dark:text-white" :class="open ? 'rotate-[-90deg]' : ''"></i>
          </div>
          <div x-show="open" x-transition class="p-3 flex flex-col">
            @forelse ($category['articles'] as $key=> $item)
      
              <a href="{{ route("read-post" , $category['articles'][$key]['id'])}} " class="bg-gray-700 my-1 p-2 w-full rounded-md text-black dark:text-white">{{ $item['title'] }}</a>
            @empty
              <p>هیچ آیتمی پیدا نشد.</p>
            @endforelse
          </div>
        </div>
      @endforeach
    </div>


</div>
