@push('css')
<style>
 .accoedianTitle::after{
 content: " ";
 position: absolute;
 bottom: 0;
 right: 0;
 left: 0;
 display: block;
 height: 10px;
 width: calc(100% + 6px);
 background-color: #1eb35b40;
 -webkit-clip-path: polygon(6px 0, 100% 0, 100% 100%, 0 100%);
 clip-path: polygon(6px 0, 100% 0, 100% 100%, 0 100%);
 z-index: 5;
}
</style>
@endpush

<div class="pt-22 px-5 pb-22">

    <div class="grid grid-cols-12 gap-3 " dir="ltr">

        <div class="col-span-12 md:col-span-3  rounded-md">
            
             
        <x-posts-page.accordian.accordian :categoris="$categoryArticles" :articles="$articles"
 />
    
     
       

        </div>
    
               <div class="col-span-12 md:col-span-9 row-start-1 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
    @foreach($articles as $article)
      <div class="bg-slate-200 dark:bg-gray-700 rounded-md min-h-[22rem] self-start">
        <div class="w-full">
          @if(File::exists(public_path($article->image['indexArray']['medium'])))
            <img src="{{ asset($article->image['indexArray']['medium']) }}" alt="react" class="rounded-md">
          @else
            <img src="{{ asset('files/react.webp') }}" alt="react" class="rounded-md">
          @endif

          <div class="p-2" dir="rtl">
            <h5 class="text-paney-gray dark:text-paney-gray">{{ $article->title }}</h5>
            <p class="text-paney-gray dark:text-platinum text-sm">{{ \Str::limit($article->description, 100) }}</p>
            <a href="{{route("read-post" , $article->id)}}" class="btn w-full mt-3 border-none outline-none  bg-sage dark:bg-celeste text-black">دیدن کامل پست</a>
          </div>
        </div>
      </div>
    @endforeach

    <!-- صفحه‌بندی -->
    <div class="col-span-full pt-3">
      {{ $articles->links('pagination::tailwind') }}
    </div>
  </div>

</div>


    
      
    </div>  
   
    
      
    
</div>
